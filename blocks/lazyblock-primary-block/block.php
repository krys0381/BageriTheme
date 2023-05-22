<!-- PRIMARY BLOCK -->

<div class="primary-block-component container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex">
	  	  	<div class="primary-block-image col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12 d-flex align-items-center">
				<?php if ( isset( $attributes['image']['url'] ) ) : ?>
  					<img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
				<?php endif; ?>
	  	  	</div>
	  	  	<div class="primary-block-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
	  	  	  	<div class="primary-block-text-content-container">
	  	  	  	  	<h2>
                        <?php echo $attributes["header"]?>
	  	  	  	  	</h2>
	  	  	  	  	<p>
                        <?php echo $attributes["text"]?>	  	  	  	  	
                    </p>
	  	  	  	  	<div class="primary-block-text-button col-lg-12 col-sm-12 col-12 d-flex justify-content-start align-item-center">
						<a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-link"><?php echo $attributes["button-text"]?><i class="bi bi-arrow-right"></i></button></a>
	  	  	  	  	</div>
	  	  	  	</div>
	  	  	</div>
	  	</div>
	</div>
</div>