<?php get_header();?>

<!-- SHOP - HERO -->

<div class="small-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="small-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h1>Shop</h1>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shop-hero.png" alt="">
    </div>
</div>

<!-- SHOP -->

<div class="shop-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex justify-content-between">
	  	  	<div class="shop-sidebar-container d-flex flex-column col-xl-3 col-lg-3 col-sm-12 col-12">
                <div class="shop-sidebar-content">
                    <h3>Product Category</h3>
                    <?php echo do_shortcode( '[product_categories columns=2]' ); ?>
                </div>
                <?php dynamic_sidebar( 'shop_sidebar_widget' ); ?>
	  	  	</div>
	  	  	<div class="shop-content-container d-flex flex-column align-items-center col-xl-9 col-lg-9 col-sm-12 col-12">
                <div class="shop-filter-search-container d-flex">
                    <div class="shop-filter col-6"></div>
                    <div class="shop-search col-6 d-flex justify-content-end">
                        <?php aws_get_search_form( true ); ?>
                    </div>
                </div>
	  	  	  	<?php echo do_shortcode( '[products columns=3]' ); ?>
	  	  	</div>
	  	</div>
	</div>
</div>

<?php get_footer();