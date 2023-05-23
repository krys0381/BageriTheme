<!-- HOME - ADDRESS AND CONTACT -->

<div class="address-contact-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="address-contact-container col-lg-6 col-sm-12 col-12 d-flex flex-column align-items-center justify-content-center">
				<div class="address-contact-text-container my-4">
	  	  	  	  	<h4>
                        <?php echo $attributes["header-1"]?>
	  	  	  	  	</h4>
	  	  	  	  	<p>
                        <?php echo $attributes["text-1"]?>
					</p>
	  	  	  	</div>
				<div class="address-contact-text-container">
	  	  	  	  	<h4>
                        <?php echo $attributes["header-2"]?>
	  	  	  	  	</h4>
	  	  	  	  	<p>
                        <?php echo $attributes["text-2"]?>
					</p>
	  	  	  	</div>            
			</div>

			<div class="map-container col-lg-6 col-sm-12 col-12 d-flex flex-column align-items-center justify-content-center">
				<iframe src="<?php echo $attributes["map-link"]?>" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps frame"></iframe>
            </div>
        </div>
    </div>
</div>