<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

$args=array(
  'post_type' => 'experience',
  'post_status' => 'publish',
  'category_name' => $category,
  'posts_per_page' => -1,
  'order' => ASC,
  
);
$my_query = null;
$my_query = new WP_Query($args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post();

 ?>
<h2><?php the_title(); ?></h2>
<?php

	// Get title


    $title = get_post_meta($post->ID, 'title', true);
    $location = get_post_meta($post->ID, 'location', true);

    if ($category == 'work') {
    	if ($title) { ?><h3><?php echo $title; ?></h3><?php 
    } 
}
elseif ($category == 'education') {
	if ($location) { ?><h3><?php echo $location; ?></h3><?php 
	}
}
?>
    <?php the_content(); ?>

<?php

  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>