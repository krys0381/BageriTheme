<!-- HOME - TESTIMONIALS -->

<div class="testimonials-component container-fluid">
  
	<div class="testimonials-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="testimonials-container d-flex flex-column justify-content-between">
					<div class="testimonials-text-container">
						<h2><?php echo $attributes["header"]?></h2>
					</div>
					<div class="testimonials-text-container d-flex flex-column align-items-center">
						<p><?php echo $attributes["text"]?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tiles-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="card-group">
                <?php foreach($attributes["testimonials"] as $testimonial): ?>
    			    <div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

				    	<div class="card tile">
				    		<div class="card-body">
				    			<div class="testimonial-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-left.svg" alt=""></div>
				    			<p class="card-text"><?php echo $testimonial["testimonial-text"]?></p>
				    			<p class="testimonial-author"><?php echo $testimonial["testimonial-author"]?></p>
				    		</div>
				    	</div>

    			    </div>
                <?php endforeach ?>
			</div>
		</div>
	</div>
</div>