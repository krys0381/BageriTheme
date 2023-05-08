<!-- ABOUT US - BAKING PHILOSOPHY -->

<div class="about-philosophy-component container-fluid">
  
	<div class="about-philosophy-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
				<div class="about-philosophy-container d-flex flex-column justify-content-between">
					<div class="about-philosophy-text-container">
						<h2><?php echo $attributes["header"]?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tiles-row g-0 container">
		<div class="row d-flex justify-content-between align-items-start">
			<div class="card-group">
                <?php foreach($attributes["cards"] as $card): ?>
    			    <div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

				    	<div class="card tile-dark">
				    		<div class="card-body">
                                <h3><?php echo $card["dark-card-header"]?></h3>
				    			<p><?php echo $card["dark-card-text"]?></p>
				    		</div>
				    	</div>

    			    </div>
    			    <div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                        <div class="card tile-light">
				    		<div class="card-body">
                                <h3><?php echo $card["light-card-header"]?></h3>
				    			<p><?php echo $card["light-card-text"]?></p>
				    		</div>
				    	</div>

    			    </div>
                <?php endforeach ?>
<!--     			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Friendly community-centric approach</h3>
							<p class="card-text">We believe that a bakery is not just a place to buy baked goods, but a welcoming space where people come together to connect, share stories, and create lasting memories.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>High-quality baked goods</h3>
							<p class="card-text">We believe that the foundation of any delicious treat starts with premium ingredients, expert craftsmanship, and unwavering attention to detail.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-dark">
						<div class="card-body">
                            <h3>Authentic Danish</h3>
							<p class="card-text">When you enjoy our treats, you’re not just indulging in deliciousness, but also experiencing the genuine flavors and craftsmanship of Danish baking at its best.</p>
						</div>
					</div>

    			</div>
    			<div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center my-2">

                    <div class="card tile-light">
						<div class="card-body">
                            <h3>Humble origins</h3>
							<p class="card-text">Our dedication to our craft and our customers is grounded in our humble origins, reminding us to stay true to our roots, never forgetting where we started, and always valuing the journey that has brought us to where we are today.</p>
						</div>
					</div>

    			</div> -->
			</div>
		</div>
	</div>
</div>