<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ronin_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendors/flaticon/flaticon.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ronin_theme' ); ?></a>

	<header class="header_area">
			<div class="main_menu" id="mainNav">
				<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container box_1620">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand logo_h" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
				<?php
				wp_nav_menu( array(
	 							'container'			  => 'ul',
								'menu_location'		=> 'primary',
	 							'menu_class'			=> 'nav navbar-nav ml-auto menu_nav'
	 						));
				 ?>
		 </div>

				</nav>
			</div>
	</header>
