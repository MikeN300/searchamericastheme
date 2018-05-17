<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=440">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_enqueue_script("jquery"); wp_head(); ?>
	<script src="<?php bloginfo('template_url');?>/js/bxslider/jquery.bxslider.min.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>











<header id="masthead" class="site-header" role="banner">
	<div class="header-main container">
		<div class="phonenumber">440.572.0450</div>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"  class="site-title" title="<?php bloginfo( 'name' ); ?>"></a>

		<nav id="top-nav" class="desktop-only">
			<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'desktop-only' ) ); ?>
		</nav>	

		<button class="toggle-nav mobile-only"></button>
		
	</div>

	<nav id="primary-nav" class="site-navigation primary-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu container' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'mobile-only' ) ); ?>
	</nav>
</header><!-- #masthead -->

<div id="main" class="site-main">
