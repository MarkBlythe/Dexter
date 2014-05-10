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
<title><?php echo get_bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="inner">
    <h1 id="logo">Dexter</h1>
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <a href="https://twitter.com/markcblythe" class="twitter-follow-button" data-show-count="false">Follow @markcblythe</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </nav><!-- #site-navigation -->
    <div class="clear"></div>
  </div>
</header><!-- #masthead -->