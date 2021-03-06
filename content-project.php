<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php /*<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"> */ ?>
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
				<div class="text page-type"><?php the_excerpt(); ?></div>
			</a>
	</article>			
	<?php //</a> ?>
