<!-- HOME - GET TO KNOW US -->
<!-- HOME - RESERVE AND COLLECT -->

<div class="home-default-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="home-default-image col-lg-6 col-sm-12 col-12 d-flex align-items-center">
	  	  	  	<img src="<?php echo $attributes["image-link"]?>">
	  	  	</div>
	  	  	<div class="home-default-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
	  	  	  	<div class="home-default-text-content-container">
	  	  	  	  	<h2>
                        <?php echo $attributes["header"]?>
	  	  	  	  	</h2>
	  	  	  	  	<p>
                        <?php echo $attributes["text"]?>	  	  	  	  	
                    </p>
	  	  	  	  	<div class="home-default-text-button col-lg-12 col-sm-12 col-12 d-flex justify-content-start align-item-center">
						<a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-link"><?php echo $attributes["button-text"]?><i class="bi bi-arrow-right"></i></button></a>
	  	  	  	  	</div>
	  	  	  	</div>
	  	  	</div>
	  	</div>
	</div>
</div>