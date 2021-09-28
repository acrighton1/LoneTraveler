<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Bootscore
	 */
	
	?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Loads the internal WP jQuery. Required if a 3rd party plugin loads jQuery in header instead in footer -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="mb-auto">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lone Traveler</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse justify-content-center" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
      <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'container' => false,
                                        'menu_class' => '',
                                        'fallback_cb' => '__return_false',
                                        'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                                        'depth' => 2,
                                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                                
      </ul>         
      <?php if ( is_active_sidebar( 'navbar-social' ) ) : ?>     
        <?php dynamic_sidebar( 'navbar-social' ); ?>
        <?php endif; ?>
    </div>
    </div>
  </div>
</nav>



      </header>

    
        <?php bootscore_ie_alert(); ?>
