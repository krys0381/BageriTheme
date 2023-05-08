<!-- ABOUT US - BAKERY GALLERY -->

<div class="gallery-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">

            <?php foreach($attributes["image-gallery"] as $image): ?> 
                <div class="col-12 gallery">
                    <img src="<?php echo $image["image-link-1"]?>">
                </div>
                <div class="col-6 gallery">
                    <img src="<?php echo $image["image-link-2"]?>">
                </div>
                <div class="col-6 gallery">
                    <img src="<?php echo $image["image-link-3"]?>">
                </div>
            <?php endforeach ?>
            
        </div>
	</div>
</div>