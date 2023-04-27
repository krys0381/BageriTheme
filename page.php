<?php get_header();?>

<div class="shop-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="shop-sidebar-container d-flex flex-column col-xl-3 col-lg-3 col-sm-12 col-12">
                <div class="shop-sidebar-content">
                    <h3>Product Category</h3>
                    <?php echo do_shortcode( '[product_categories columns=2]' ); ?>
                </div>

                <div class="shop-sidebar-content">
                    <h3>Pickup Time Cut-Off</h3>
                    <p>Orders are accepted until 4:30 PM and will be scheduled for pickup on the next day.</p>
                </div>

                <div class="shop-sidebar-content">
                    <h3>Opening Hours</h3>
                    <p>
                        Monday - Sunday<br>
                        7:00 AM - 4:00 PM
                    </p>
                </div>

                <div class="shop-sidebar-content">
                    <h3>Address & Contact Info</h3>
                    <p>
                        Strandvejen 423, 6854 Henne, Denmark<br>
                        (+45) 30 74 95 02<br>
                        info@detlillebageri.dk<br>
                    </p>
                </div>
	  	  	</div>
	  	  	<div class="shop-content-container d-flex justify-content-center col-xl-9 col-lg-9 col-sm-12 col-12">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post() ?>
						<?php the_content() ?>
					<?php endwhile; ?>
				<?php endif; ?>
	  	  	</div>
	  	</div>
	</div>
</div>

<?php
get_footer();
