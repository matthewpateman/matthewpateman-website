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
?>
<div id="grey" class="hidden"></div>

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

<div id="image" style="
		background:-webkit-linear-gradient(top, rgba(0,0,0,0.0) 0%,rgba(0,0,0,0.4) 100%), url('<?php echo $src[0] ?>');
		background-size: cover;
		background-position: bottom center;
		background-repeat: no-repeat;">
	<div class="wrapper">
		<span><?php if ( is_home() ) { echo "Blog"; } else {the_title(); } ?></span>
	</div>
</div>
<script> getHeight(); </script>

			<?php } ?>