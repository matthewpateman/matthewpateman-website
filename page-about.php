<?php
/**
 * Template Name: About
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


get_header(); ?>

<div class="wrapper first">

	<div class="text">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .text -->
</div>

<div class="wrapper">
	<div class="text">
		<h2>Education</h2>
<ul>
<?php
$args=array(
  'post_type' => 'experience',
  'post_status' => 'publish',
  'category_name' => 'education',
  'posts_per_page' => -1,
  'order' => ASC,
  
);
$my_query = null;
$my_query = new WP_Query($args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post();
  $location = get_post_meta($post->ID, 'location', true);

 ?>
<li><?php the_title(); ?> - <?php echo $location; ?></li>

<?php

  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
</ul>
<h2>Curriculum Vitae</h2>
<p><a href="cv">View my CV</a> or<br />
<a href="http://linkedin.com/in/matthewpateman" />connect with me on LinkedIn</a>.
</p>

			</div><!-- .text -->

</div><!-- .wrapper -->

<?php get_footer(); ?>