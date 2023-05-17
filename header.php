<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bageri
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bageri' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header container-fluid">
            <div class="header-row row d-flex">
                <div class="desktop-menu-container d-flex justify-content-between">

                    <div class="left-menu-container d-flex col-3 align-items-center justify-content-start" >
                        <div class="col-2"></div>
						<div class="logo-container col-10">
                            <div class="image-container d-flex justify-content-start align-items-center">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="middle-menu-container col-6 d-none d-xl-flex align-items-center justify-content-center">
						<div class="header-navigation d-none d-xl-flex g-2">
							<nav id="site-navigation" class="main-navigation">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div>
                    </div>

					<div class="right-menu-container col-3 d-flex align-items-center justify-content-end">
						<div class="col-5"></div>
						<div class="languages-container col-3 d-none d-xl-flex align-items-center justify-content-center">
							<div class="dropdown-center">
								<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  									<img src="<?php echo get_template_directory_uri(); ?>/images/uk.png" alt="">EN
  								</button>
  								<ul class="dropdown-menu">
  								  <li><a class="dropdown-item active" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/uk.png" alt="">EN</a></li>
  								  <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/denmark.png" alt="">DK</a></li>
  								  <li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/germany.png" alt="">DE</a></li>
  								</ul>
							</div>
						</div>
						<div class="account-icon-container col-2 d-none d-xl-flex align-items-center justify-content-center">
							<a href="/my-account"><i class="bi bi-person-fill"></i></a>
						</div>
						<div class="cart-icon-container col-2 d-none d-xl-flex align-items-center justify-content-center">
							<a href="/cart"><i class="bi bi-basket2-fill"></i></a>
						</div>
						<div class="col-2"></div>

						<div class="mobile-navigation d-flex d-xl-none g-2">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <div class="hamburger">
                                    <div class="bars1"></div>
                                    <div class="bars2"></div>
                                    <div class="bars3"></div>
                                </div>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                  <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h4>
                                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
									<?php wp_nav_menu(array("theme_location" => "mobile-nav-menu-location")) ?>
									<ul>
										<li><a href="#"><i class="bi bi-person-fill"></i>LOGIN</a></li>
										<li><a href="/cart"><i class="bi bi-basket2-fill"></i>CART</a></li>
									</ul>
  									<ul class="languages-mobile-container">
  									  <li><a class="language active" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/uk.png" alt="">EN</a></li>
  									  <li><a class="language" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/denmark.png" alt="">DK</a></li>
  									  <li><a class="language" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/germany.png" alt="">DE</a></li>
  									</ul>
                                </div>
                            </div>
                        </div>
					</div>
                </div> 
            </div>
        </div>

	</header><!-- #masthead -->
