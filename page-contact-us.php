<?php get_header();?>

<!-- CONTACT US - HERO -->

<div class="contact-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="contact-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact-hero.png" alt="">
    </div>
</div>

<!-- CONTACT US - INFO -->

<div class="contact-info-component container-fluid">
  
	<div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-info-text-container d-flex flex-column justify-content-between">
					<div class="contact-info-text">
						<h2>Contact our bakery for delicious treats and outstanding service</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
            <div class="col-lg-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">

	        	<div class="contact-info-container col-4 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone-color.png" alt="">
                        </div>
                        <h4>PHONE</h4>
                        <p>(+45) 30 74 95 02</p>
                    </div>
	        	</div>
	        	<div class="contact-info-container col-4 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/location-dot-color.png" alt="">
                        </div>
                        <h4>ADDRESS</h4>
                        <p>Strandvejen 423, 6854 Henne, Denmark</p>
                    </div>
	        	</div>
	        	<div class="contact-info-container col-4 d-flex justify-content-center">
                    <div class="contact-info-content d-flex flex-column align-items-center">
                        <div class="contact-info-icon d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/envelope-color.png" alt="">
                        </div>
                        <h4>EMAIL</h4>
                        <p>info@detlillebageri.dk</p>
                    </div>
	        	</div>

	        </div>
        </div>
	</div>

</div>

<!-- CONTACT US - MESSAGE FORM -->

<div class="contact-info-component container-fluid">
	<div class="contact-info-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="contact-info-text-container d-flex flex-column justify-content-between">
					<div class="contact-info-text">
						<h3>Have questions? Leave us a message</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contact-form-component container-fluid overflow-hidden">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="contact-form-container d-flex justify-content-center flex-column col-lg-12 col-sm-12 col-12">
                <div class="contact-form-content-container d-flex justify-content-center">
                    <form action="" class="form col-lg-6 col-sm-12 col-12" ref="form">
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="text" class="form-control" id="nameInput" placeholder="Name" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="text" class="form-control" id="subjectInput" placeholder="Subject" required>
                        </div>
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <textarea type="text" class="form-control" id="messageInput" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-button-container d-flex justify-content-center">
                            <a href="#">
                                <button type="submit" class="btn btn-primary col-12 col-xl-12 btn-lg mt-3" name="send">SEND MESSAGE</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CONTACT US - MAP -->

<div class="contact-map-component container-fluid">
	<div class="contact-map-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
                <div class="contact-map-text-container d-flex flex-column justify-content-between">
					<div class="contact-map-text">
						<h3>Discover our bakery, visit us today!</h3>
					</div>
				</div>			
            </div>
		</div>
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.0817895062314!2d8.176667876803911!3d55.73970787307935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464aef6fd8baa8bb%3A0x5ed0cc4b77244caa!2sDet%20Lille%20Bageri%20Henne%20Strand!5e0!3m2!1sen!2scz!4v1683022820287!5m2!1sen!2scz" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>

<?php get_footer();