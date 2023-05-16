<?php get_header();?>

<!-- SHOP - CART -->

<div class="shop-container container-fluid overflow-hidden" id="cart">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="shop-sidebar-container d-flex flex-column col-xl-3 col-lg-3 col-sm-12 col-12">
                <?php dynamic_sidebar( 'shop_sidebar_widget' ); ?>
	  	  	</div>
	  	  	<div class="shop-content-container d-flex flex-column align-items-center col-xl-9 col-lg-9 col-sm-12 col-12">
                <?php if(have_posts()): ?>
					<?php while(have_posts()): the_post() ?>
						<?php the_content() ?>
					<?php endwhile; ?>
				<?php endif; ?>
	  	  	</div>
	  	</div>
	</div>
</div>

<?php get_footer();