<!-- HOME - HERO  -->

<div class="big-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
	
	<div class="container content-container d-flex align-items-center justify-content-start m-0">
		<div class="row d-flex flex-column align-items-center justify-content-start">
			
			<div class="big-hero-content-container col-lg-12 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-start justify-content-start">
			  	<h1><?php echo $attributes["header"]?></h1>
			  	<p class="col-lg-8 my-3">
                    <?php echo $attributes["text"]?>
                </p>
			</div>

			<div class="big-hero-content-container col-lg-12 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-start">
				<div class="big-hero-buttons-container col-12 d-flex align-items-center justify-content-start">
					<a href="<?php echo $attributes["primary-button-link"]?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12"><?php echo $attributes["primary-button-text"]?></button></a>
					<a href="<?php echo $attributes["secondary-button-link"]?>"><button type="button" class="btn btn-link"><?php echo $attributes["secondary-button-text"]?><i class="bi bi-arrow-right"></i></button></a>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-image-container d-flex align-item-center justify-self-center">
		<?php if ( isset( $attributes['background-image']['url'] ) ) : ?>
  			<img src="<?php echo esc_url( $attributes['background-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['background-image']['alt'] ); ?>">
		<?php endif; ?>
	</div>

</div>