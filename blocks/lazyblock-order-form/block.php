<!-- CUSTOM CAKE - FORM HEADER -->

<div class="custom-cake-form-header-component container-fluid"> 
	<div class="custom-cake-form-header-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="custom-cake-form-header-text-container d-flex flex-column justify-content-between">
					<div class="custom-cake-form-header-text">
						<h2><?php echo $attributes["header"]?></h2>
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
                <?php if ( isset( $attributes['image']['url'] ) ) : ?>
  					<img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
				<?php endif; ?>	  	  	
            </div>
	  	  	<div class="custom-cake-order-form-container d-flex justify-content-center flex-column col-lg-6 col-sm-12 col-12">
                <div class="custom-cake-order-form-content-container d-flex justify-content-center">
                    <?php echo do_shortcode( $attributes["form-shortcode"] ); ?>
                </div>
            </div>
	  	</div>
	</div>
</div>