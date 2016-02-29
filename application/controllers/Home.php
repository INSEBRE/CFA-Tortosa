<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['content']='includes/index';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}

	public function secretary() {
		$data['content']='includes/secretary';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}


	public function teacher() {
		$data['content']='includes/teacher';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}

	public function form_contact() {
		//set validation rules
        $this->form_validation->set_rules('name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE){
            $data['content']='includes/contact';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
	  		$this->load->view('templates/body',$data);
	  		$this->load->view('templates/footer',$data);
        } else {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'user@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'user@gmail.com';
            $config['smtp_pass'] = 'password';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->email->initialize($config);   

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->message($message);

            if ($this->email->send()) {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">El seu missatge s&#39;ha enviat amb èxit!</div>');
                redirect('home/form_contact');
            } else {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Hi han errors en l&#39;enviament del correu! Per favor, intenta&#39;l una altra vegada més tard</div>');
                redirect('home/form_contact');
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str) {
        if (!preg_match("/^[a-zA-Z ]+$/",$str)) {
            $this->form_validation->set_message('alpha_space_only', 'El camp %s ha de contenir només letres i espais');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}