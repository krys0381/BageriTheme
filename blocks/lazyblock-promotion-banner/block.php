<!-- HOME - SPECIAL OFFER -->
<!-- HOME - CUSTOM CAKES -->
<!-- ABOUT US - CONTACT -->

<div class="promotion-banner-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="promotion-banner-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h2><?php echo $attributes["header"]?></h2>
				<a href="<?php echo $attributes["button-link"]?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12"><?php echo $attributes["button-text"]?></button></a>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex d-md-flex align-item-center justify-self-center">
      <img src="<?php echo $attributes["background-image-link"]?>">
    </div>
</div>