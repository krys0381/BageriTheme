<!-- ABOUT US - HERO -->
<!-- SHOP - HERO -->
<!-- CUSTOM CAKE - HERO -->
<!-- CONTACT US - HERO -->

<div class="small-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="small-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1><?php echo $attributes["header"]?></h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-flex align-item-center justify-self-center">
        <?php if ( isset( $attributes['background-image']['url'] ) ) : ?>
  			<img src="<?php echo esc_url( $attributes['background-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['background-image']['alt'] ); ?>">
		<?php endif; ?>
    </div>
</div>