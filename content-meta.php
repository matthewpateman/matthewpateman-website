<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

	// Set Page Description

	if (is_page('Home') ) { 
		$myExcerpt = get_bloginfo('description'); 
	} else {
		$myExcerpt = get_the_excerpt();
		$tags = array("<p>", "</p>");
		$myExcerpt = str_replace($tags, "", $myExcerpt);  
	}

	// Meta 

?>
<meta name="Designer" content="Matthew Pateman" />
<meta name="keywords" content="Matthew Pateman" />
<meta name="description" content="<?php echo $myExcerpt; ?>" />
<meta name="author" content="Matthew Pateman" />
<meta name="ICBM" content="51.501249,-0.126271" />
<meta name="Revisit-After" content="7 Days" />
<meta name="Robots" content="Index, Follow" />

<?php

	// Geo Metadata Tags

?>
<meta name="geo.position" content="51.501249,-0.126271" />
<meta name="geo.placename" content="Islington, London, Greater London, United Kingdom" />
<meta name="geo.region" content="GB-LND" />
<?php

	// Facebook Open Graph

	if (is_page('Home') ) { 
		$title = get_bloginfo('name');
	} else {
		$title = get_the_title();
	}

?>
<meta property="og:title"			content="<?php echo $title; ?>" />
<meta property="og:description"		content="<?php echo $myExcerpt; ?>" />
<meta property="og:type"			content="website" />
<meta property="og:url"				content="<?php the_permalink() ?>" />
<meta property="og:site_name"		content="Matthew Pateman" />
<?php 

	// Set the thumbnail image

	if (is_page('Home') || is_page('Projects')) { 
		$src = get_stylesheet_directory_uri() . '/icon.png';
	} else {
		$content = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
		$src = $content[0];
	}
?>
<meta property="og:image" content="<?php echo $src;?>" />