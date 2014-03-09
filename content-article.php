<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

		<article>
			<a href="<?php the_permalink(); ?>">
			<?php
				//Get the Thumbnail URL
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
				if ($src) {
			?>
			<img src="<?php echo $src[0] ?>" />
			<?php } else { ?>
				<!-- insert template image here -->
			<?php } ?>
			<div class="title"><?php the_title(); ?></div>
			<div class="text"><?php the_excerpt(); ?></div>



			</a>
			<footer>
				<div class="date"><?php the_date(); ?></div>
				<?php // <div class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?> </div> ?>
			</footer>
		</article>
