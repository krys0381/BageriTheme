<!-- HOME - INSTAGRAM FEED -->

<div class="feed-component container-fluid">
	<div class="feed-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="feed-container col-12 d-flex flex-column justify-content-center">
					<div class="feed-text-container">
						<a href="<?php echo $attributes["header-link"]?>"><h3><?php echo $attributes["header"]?></h3></a>
					</div>
					<div class="feed-text-container d-flex flex-column align-items-center">
						<p><?php echo $attributes["text"]?></p>
					</div>
				</div>
			</div>
		</div>
		<?php echo do_shortcode( $attributes["feed-shortcode"] ); ?>
	</div>
</div>