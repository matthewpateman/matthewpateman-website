<?php
/**
 * Template Name: Projects
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="firstwrapper" class="articles">



<?php
$args=array(
  
	'post_type' => 'page',
	'post_parent' => 6,
	'posts_per_page' => 0,
	'sort_order' => 'desc'  

  
);
$my_query = null;
$my_query = new WP_Query($args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>


<?php get_template_part( 'content', 'project' ); ?>

<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>


<div class="clear"></div>
</div>
			



<?php get_footer(); ?>