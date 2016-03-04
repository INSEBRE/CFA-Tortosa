<div class="main_bg"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>Direcció:</h2>
      				<address>
      				<br>
						<p>C/ Hernan Cort&eacute;s, 15 (Institut de l'Ebre)</p>
						<p>43500 Tortosa, Tarragona</p>
				   		<p>Tel: (34) 977588995</p>
				 	 	<p>Email: <a href="mailto:e3009771@xtec.cat">e3009771@xtec.cat</a></p>
				   		<p>Seguir-nos a: <a href="https://www.facebook.com/cfa.tortosa">Facebook</a></p>
				   	</address>
				</div>

				<div class="col-md-8">
					<div class="contact-form">
					  	<h2>Contacta'ns</h2>
						<?php $attributes = array("name" => "form_contact");
						echo form_open("home/form_contact", $attributes);?>
					  		
						    	<div>
							    	<span>Nom</span>
							    	<input type="name" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>"/>
							    	<span class="text-danger"><?php echo form_error('name'); ?></span>
							    </div>

							    <div>
							    	<span>Correu</span>
							    	<input class="form-control" type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" />
		                    		<span class="text-danger"><?php echo form_error('email'); ?></span>
							    </div>
							    
							    <div>
							    	<span>Missatge</span>
							    	<textarea class="form-control-contact" name="message">
							    		<?php echo set_value('message'); ?>
							    	</textarea>
		                    		<span class="text-danger"><?php echo form_error('message'); ?></span>
							    </div>
							    
							    <div>
							   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Enviar"></label>
							    </div>

						<?php echo form_close(); ?>
	            		<?php echo $this->session->flashdata('msg'); ?>
				    </div>
  				</div>
  			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="main_btm"><!-- start main -->
	<div class="container">
		<div class="main row">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=Carrer d'Hernán Cortés, 15, 43500 Tortosa, Tarragona, Spain&amp;ie=UTF8&amp;t=m&amp;z=17&amp;iwloc=B&amp;output=embed"></iframe>
			<br>
			<small>
				<a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">Veure més gran</a>
			</small>
		</div>
	</div>
</div><!-- end main -->