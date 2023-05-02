<?php get_header();?>

<!-- CUSTOM CAKE - HERO -->

<div class="custom-cake-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="custom-cake-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1>Custom Cake</h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/custom-hero.png" alt="">
    </div>
</div>

<!-- CUSTOM CAKE - FORM HEADER -->

<div class="custom-cake-form-header-component container-fluid"> 
	<div class="custom-cake-form-header-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="custom-cake-form-header-text-container d-flex flex-column justify-content-between">
					<div class="custom-cake-form-header-text">
						<h2>Indulge in delicious artistry:<br>Custom cakes for weddings, birthdays & more</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- CUSTOM CAKE - ORDER FORM -->

<div class="custom-cake-order-form-component container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="custom-cake-order-form-image col-lg-6 col-sm-12 col-12 d-flex align-items-center">
	  	  	  	<img src="<?php echo get_template_directory_uri(); ?>/images/get-to-know-us.png" alt="Owners of Det Lille Bageri">
	  	  	</div>
	  	  	<div class="custom-cake-order-form-container d-flex justify-content-center flex-column col-lg-6 col-sm-12 col-12">
                <div class="custom-cake-order-form-content-container d-flex justify-content-center">
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

<?php get_footer();