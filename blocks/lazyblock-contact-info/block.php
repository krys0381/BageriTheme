<!-- CONTACT US - INFO -->

<div class="contact-info-component container-fluid">
  
	<div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-info-header-container d-flex flex-column justify-content-between">
					<div class="contact-info-header">
						<h2><?php echo $attributes["header"]?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
            <div class="contact-info-container col-lg-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">

	        	<div class="contact-info-content-container col-md-4 col-12 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone-color.png" alt="">
                        </div>
                        <h4><?php echo $attributes["phone-header"]?></h4>
                        <p><?php echo $attributes["phone-text"]?></p>
                    </div>
	        	</div>
	        	<div class="contact-info-content-container col-md-4 col-12 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-dot-color.png" alt="">
                        </div>
                        <h4><?php echo $attributes["address-header"]?></h4>
                        <p><?php echo $attributes["address-text"]?></p>
                    </div>
	        	</div>
	        	<div class="contact-info-content-container col-md-4 col-12 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/envelope-color.png" alt="">
                        </div>
                        <h4><?php echo $attributes["email-header"]?></h4>
                        <p><?php echo $attributes["email-text"]?></p>
                    </div>
	        	</div>

	        </div>
        </div>
	</div>

</div>