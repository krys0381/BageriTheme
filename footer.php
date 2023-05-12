<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bageri
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="footer">
		    <div class="footer-container container">
		        <div class="footer-row row g-0 d-flex col-lg-12 align-items-center">

		            <div class="footer-menu-row col-12 d-flex align-items-top justify-content-center">
		                <div class="quicklinks-container col-xl-3 col-md-3 col-lg-3 col-12 p-0 d-flex flex-direction-column align-items-top justify-content-start">
							<div class="quicklinks">
								<h4>QUICKLINKS</h4>
								<?php wp_nav_menu(array("theme_location" => "footer-nav-menu-location")) ?>
							</div>
		                </div>
		                <div class="address-contact-container col-xl-3 col-lg-3 col-md-3 col-12 p-0 d-flex align-items-top justify-content-start">
		                    <div class="footer-text-container">
								<?php dynamic_sidebar( 'footer_contact_widget' ); ?>
		                        <!-- <h4>ADDRESS & CONTACT DETAILS</h4>
		                        <p>Strandvejen 423, 6854 Henne, Denmark</p>
		                        <p>(+45) 30 74 95 02</p>
		                        <p>info@detlillebageri.dk</p> -->
		                    </div>
		                </div>
		                <div class="opening-hours-container col-xl-3 col-lg-3 col-md-3 col-12 p-0 d-flex align-items-top justify-content-center">
		                    <div class="footer-text-container">
								<?php dynamic_sidebar( 'footer_opening_widget' ); ?>
								<!-- <h4>OPENING HOURS</h4>
		                        <p>Monday - Sunday</p>
		                        <p>7:00 - 16:00</p> -->
		                    </div>
						</div>	
		                <div class="some-links-container col-3 p-0 d-none d-xl-flex align-items-top justify-content-center">
		                    <div class="footer-text-container">
								<?php dynamic_sidebar( 'footer_some_widget' ); ?>
								<!-- <h4>STAY CONNECTED</h4>
								<div class="some-links d-flex">
									<a href="#">
										<div class="some-link"><img src="/images/facebook.svg" alt=""></div>
									</a>
									<a href="#">
										<div class="some-link"><img src="/images/instagram.svg" alt=""></div>
									</a>
								</div>
								<p>Copyright © 2023 Det Lille Bageri</p> -->
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>
			<div class="footer-end-container col-12 d-flex p-3 align-items-center justify-content-center">
		        <div class="payment-options-container col-6 d-flex p-0 align-items-center justify-content-center">
					<?php dynamic_sidebar( 'footer_payment_widget' ); ?>
		        	<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/visa.png" alt="">
		        	<img src="<?php echo get_template_directory_uri(); ?>/images/mastercard.png" alt="">
		        	<img src="<?php echo get_template_directory_uri(); ?>/images/mobilepay.svg" alt=""> -->
		        </div>
		    </div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>