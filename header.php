<?php
/**
 * This is the header template for all pages.
 * @package Dexter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ie.css">
<![endif]-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->