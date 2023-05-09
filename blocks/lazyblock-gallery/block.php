<!-- ABOUT US - BAKERY GALLERY -->

<div class="gallery-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">

            <?php foreach($attributes["image-gallery"] as $image): ?> 
                <div class="col-12 gallery">
                    <?php if ( isset( $image['image-1']['url'] ) ) : ?>
  			            <img src="<?php echo esc_url( $image['image-1']['url'] ); ?>" alt="<?php echo esc_attr( $image['image-1']['alt'] ); ?>">
		            <?php endif; ?>
                </div>
                <div class="col-6 gallery">
                    <?php if ( isset( $image['image-2']['url'] ) ) : ?>
  			            <img src="<?php echo esc_url( $image['image-2']['url'] ); ?>" alt="<?php echo esc_attr( $image['image-2']['alt'] ); ?>">
		            <?php endif; ?>
                </div>
                <div class="col-6 gallery">
                    <?php if ( isset( $image['image-3']['url'] ) ) : ?>
  			            <img src="<?php echo esc_url( $image['image-3']['url'] ); ?>" alt="<?php echo esc_attr( $image['image-3']['alt'] ); ?>">
		            <?php endif; ?>
                </div>
            <?php endforeach ?>
            
        </div>
	</div>
</div>