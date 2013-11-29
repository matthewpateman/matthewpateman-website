<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="<?php echo get_stylesheet_directory_uri() ?>/script/jquery.animate.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/script/jquery.anchorScroll.js" type="text/javascript"></script>


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<link rel="apple-touch-icon-precomposed" 					href="<?php echo get_stylesheet_directory_uri() ?>/touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" 		href="<?php echo get_stylesheet_directory_uri() ?>/touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" 	href="<?php echo get_stylesheet_directory_uri() ?>/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" 	href="<?php echo get_stylesheet_directory_uri() ?>/touch-icon-ipad-retina.png" />

<!-- Common Metadata Tags --> 

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php get_template_part( 'content', 'meta' ); ?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11330106-1']);
  _gaq.push(['_setDomainName', 'matthewpateman.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
	$(document).ready(
		function() {
		$("#menubutton").click(function() {
  			$("#site-navigation").toggleClass('hidemenu');
		});


		
 	});


</script>

</head>

<body <?php body_class(); ?>>
<header id="main">
	<div class="wrapper">
			
			<nav id="site-navigation" role="navigation" class="hidemenu">
				<?php wp_nav_menu( array( 'theme_location' => '', 'menu_class' => 'nav-menu', 'depth' => 1 ) ); ?>
			</nav><!-- #site-navigation -->
			<a href="<?php echo get_settings('home'); ?>"><div id="logo"></div></a>
			<div id="menubutton"></div>
			<div class="clear"></div>

	</div>
</header><!-- #masthead -->
		<?php 
			//Get the Thumbnail URL
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
			if ($src) { 
		?>

<img class="image" src="<?php echo $src[0] ?>" />

			<?php } ?>