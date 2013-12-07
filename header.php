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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php 

	// LINKS

?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="apple-touch-icon-precomposed" 					href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" 		href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad-retina.png" />
<?php 

	// META DATA
	get_template_part( 'content', 'meta' );
 
	// Google Analytics
	get_template_part( 'content', 'analytics' );
?>
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
</header>
		<?php 

		if (is_home() )
		{
			$args=array(
			'post_type' => 'page',
			'p' => '7'
  
);
$my_query = null;
$my_query = $query = new WP_Query( $args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post();


$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );

  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().

			
		} else { 
			//Get the Thumbnail URL
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );

		}
			if ($src) { 
		?>

<img class="image" src="<?php echo $src[0] ?>" />

			<?php } ?>