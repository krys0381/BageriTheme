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
            <div class="container">
                <div class="header-row row d-flex">
                    <div class="desktop-menu-container d-flex justify-content-between">

                        <div class="left-menu-container d-flex col-4 align-items-center justify-content-start" >
                            <div class="logo-container col-8">
                                <div class="image-container d-flex justify-content-start align-items-center">
                                    <!-- the_custom_logo() ?> -->
                                </div>
                            </div>
                        </div>

                        <div class="middle-menu-container col-4 d-flex align-items-center justify-content-end">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bageri' ); ?></button>
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

						<div class="right-menu-container col-4 d-flex align-items-center justify-content-end">
							<div class="search-container col-2"></div>

							<div class="languages-container col-3">
								<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  								  EN
  								</button>
  								<ul class="dropdown-menu">
  								  <li><a class="dropdown-item" href="#">EN</a></li>
  								  <li><a class="dropdown-item" href="#">DK</a></li>
  								  <li><a class="dropdown-item" href="#">DE</a></li>
  								</ul>
							</div>

							<div class="button-container col-7">
								<a href="#"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">RESERVE & COLLECT</button></a>
							</div>
						</div>
                    </div> 
                </div>
            </div>
        </div>

	</header><!-- #masthead -->
