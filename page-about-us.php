<?php get_header();?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post() ?>
		<?php the_content() ?>
	<?php endwhile; ?>
<?php endif; ?>

<!-- ABOUT US - HERO

<div class="about-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="about-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1>Our sweet journey</h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
        <img src="/images/about-hero.png" alt="">
    </div>
</div> -->

<!-- ABOUT US - DISCOVER OUR STORY

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
</div> -->

<!-- ABOUT US - BAKERY GALLERY

<div class="about-gallery-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">

        </div>
	</div>
</div> -->

<!-- ABOUT US - BAKING PHILOSOPHY

<div class="about-philosophy-component container-fluid">
  
	<div class="about-philosophy-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="about-philosophy-container d-flex flex-column justify-content-between">
					<div class="about-philosophy-text-container">
						<h2>Our baking philosophy <br>in action</h2>
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
                            <h3>Handmade with passion</h3>
							<p class="card-text">We believe that the art of baking goes beyond simply following recipes, but rather it requires a genuine passion and dedication to the craft.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Friendly community-centric approach</h3>
							<p class="card-text">We believe that a bakery is not just a place to buy baked goods, but a welcoming space where people come together to connect, share stories, and create lasting memories.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>High-quality baked goods</h3>
							<p class="card-text">We believe that the foundation of any delicious treat starts with premium ingredients, expert craftsmanship, and unwavering attention to detail.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Authentic Danish</h3>
							<p class="card-text">When you enjoy our treats, you’re not just indulging in deliciousness, but also experiencing the genuine flavors and craftsmanship of Danish baking at its best.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>Humble origins</h3>
							<p class="card-text">Our dedication to our craft and our customers is grounded in our humble origins, reminding us to stay true to our roots, never forgetting where we started, and always valuing the journey that has brought us to where we are today.</p>
						</div>
					</div>

    			</div>
			</div>
		</div>
	</div>
</div> -->

<!-- ABOUT US - HENNE STRAND

<div class="about-henne-strand-component container-fluid">
  
	<div class="about-henne-strand-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="about-henne-strand-container d-flex flex-column justify-content-between">
					<div class="about-henne-strand-text-container">
						<h2>Indulge in our bakery treats <br>while enjoying the sunset at <br>Henne Strand, Denmark.</h2>
					</div>
					<div class="about-henne-strand-text-container d-flex flex-column align-items-center">
						<p>Our bakery is perfectly situated within walking distance of the pristine beaches of Henne Strand, a renowned tourist hotspot in Denmark. Our bakery offers a delightful culinary experience for visitors and locals alike, providing a convenient stop for beachgoers looking to indulge in freshly baked goods. Whether you’re enjoying a leisurely walk along the sandy shores or soaking up the sun by the sea, our delicious treats perfectly complement your beach day.</p>
					</div>
				</div>
			</div>

			<div class="about-henne-strand-gallery-container">

			</div>
		</div>
	</div>

</div> -->

<!-- ABOUT US - CONTACT

<div class="promotion-banner-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="promotion-banner-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h2>Let's bake memories together!</h2>
				<a href="#"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">CONTACT US</button></a>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex d-md-flex align-item-center justify-self-center">
      <img src="/images/about-contact.png" alt="Sliced Easter cake">
    </div>
</div> -->

<?php get_footer();