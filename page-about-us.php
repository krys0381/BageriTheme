<?php get_header();?>

<!-- ABOUT US - HERO -->

<div class="about-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="about-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1>Our sweet journey</h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-hero.png" alt="">
    </div>
</div>

<!-- ABOUT US - DISCOVER OUR STORY -->

<div class="about-discover-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="about-discover-image col-lg-6 col-sm-12 col-12 d-flex align-items-center">
	  	  	  	<img src="<?php echo get_template_directory_uri(); ?>/images/about-logo.png" alt="Owners of Det Lille Bageri">
	  	  	</div>
	  	  	<div class="about-discover-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
	  	  	  	<div class="about-discover-text-content-container">
	  	  	  	  	<h2>
                        Discover our story
	  	  	  	  	</h2>
	  	  	  	  	<p class="about-discover-text-p">
                        At our bakery, we are more than just a business - we are a family. The bakery is owned and operated by a husband and wife duo who have poured their heart and soul into creating a warm and welcoming atmosphere for our customers.<br></br>
                        With 25 years of experience in the baking industry, the husband has honed his skills in creating delicious cakes and bread that everyone loves.<br></br>
                        The wife works alongside her husband, bringing her expertise to the bakery. Together, they have owned the bakery for four years and take pride in being the only homey and affordable bakery in Henne Strand.<br></br>
                        Our last name, Elsa’s Bakeshop, is well-known among our loyal customers. They often describe our bakery as humble and inviting.<br></br>
                        We treasure our customers and aim for delightful visits. Our bakery is not just a food stop - it’s where you can feel the warmth of our family’s passion for baking. We appreciate your support and eagerly anticipate serving you our homemade bread, pastries, cakes, and gluten-free options made with love.
                    </p>
	  	  	  	</div>
	  	  	</div>
	  	</div>
	</div>
</div>

<!-- ABOUT US - GALLERY -->

<div class="about-gallery-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">

            <?php if(have_posts()): ?>
            	<?php while(have_posts()): the_post() ?>
            		<?php the_content() ?>
            	<?php endwhile; ?>
            <?php endif; ?>

        </div>
	</div>
</div>

<!-- ABOUT US - BAKING PHILOSOPHY -->

<div class="about-philosophy-component container-fluid">
  
	<div class="about-philosophy-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="about-philosophy-container d-flex flex-column justify-content-between">
					<div class="about-philosophy-text-container">
						<h2>Our baking philosophy in action</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tiles-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="card-group">
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

					<div class="card tile-dark">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>Fresh baked goods</h3>
							<p class="card-text">Our philosophy is centered around the art of fresh baked goods. We trust in utilizing solely the premium quality ingredients, handcrafting each treat with care, and upholding the highest standards of quality and freshness.</p>
						</div>
					</div>

    			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();