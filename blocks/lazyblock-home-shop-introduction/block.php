<!-- HOME - SHOP INTRODUCTION -->

<div class="shop-introduction-component container-fluid">
  
	<div class="shop-introduction-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="shop-introduction-container d-flex flex-column justify-content-between">
					<div class="shop-introduction-text-container">
						<h2><?php echo $attributes["header"]?></h2>
					</div>
					<div class="shop-introduction-text-container d-flex flex-column align-items-center">
						<p><?php echo $attributes["text"]?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="shop-categories-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="card-group">
                <?php foreach($attributes["shop-categories"] as $shop_category): ?>
    			    <div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

				    	<a href="<?php echo $shop_category["category-link"]?>">
				    		<div class="card shop-category">
  				    			<img src="<?php echo $shop_category["category-image"]?>" class="card-img">
  				    			<div class="card-img-overlay">
				    			  	<div class="title-shadow"><h3 class="card-title"><?php echo $shop_category["category-name"]?></h3></div>
  				    			</div>
				    		</div>
				    	</a>

    			    </div>
                <?php endforeach ?>
			</div>
		</div>
	</div>
</div>