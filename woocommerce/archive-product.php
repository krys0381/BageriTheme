<?php get_header();?>

<!-- SHOP - HERO -->

<?php dynamic_sidebar( 'shop_hero_widget' ); ?>

<!-- SHOP -->

<div class="shop-container container-fluid overflow-hidden">
	<div class="container">
	  	<div class="row d-flex">
	  	  	<div class="shop-sidebar-container d-flex flex-column col-xl-3 col-lg-3 col-sm-12 col-12">
                <div class="shop-sidebar-content">
                    <h3>Product Category</h3>
                    <?php echo do_shortcode( '[product_categories columns=2]' ); ?>
                </div>
                <?php dynamic_sidebar( 'shop_sidebar_widget' ); ?>
	  	  	</div>
	  	  	<div class="shop-content-container d-flex flex-column align-items-center col-xl-9 col-lg-9 col-sm-12 col-12">
                <div class="shop-filter-search-container d-flex">
                    <div class="shop-filter col-lg-6 col-2"></div>
                    <div class="shop-search col-lg-6 col-10 d-flex justify-content-end">
                        <?php aws_get_search_form( true ); ?>
                    </div>
                </div>
                <?php if ( woocommerce_product_loop() ) {

                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();
                        
                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );
                        
                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                    } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                    }

                    /**
                    * Hook: woocommerce_after_main_content.
                    *
                    * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                    */
                    do_action( 'woocommerce_after_main_content' );
                ?> 
	  	  	</div>
	  	</div>
	</div>
</div>

<?php get_footer();