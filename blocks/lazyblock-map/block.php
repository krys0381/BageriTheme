<!-- CONTACT US - MAP -->

<div class="contact-map-component container-fluid">
	<div class="contact-map-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
                <div class="contact-map-text-container d-flex flex-column justify-content-between">
					<div class="contact-map-text">
						<h3><?php echo $attributes["header"]?></h3>
					</div>
				</div>			
            </div>
		</div>
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
                <iframe src="<?php echo $attributes["map-link"]?>" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps frame"></iframe>
			</div>
		</div>
	</div>
</div>