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
				

<?php 
	//Get the Thumbnail URL
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
	if ($src) { 
?>

<header  style="background: url('<?php echo $src[0] ?>') top left; background-size:100%;"></header>

<?php } else { ?>

<header></header>

<?php } ?>
				<div class="title"><?php the_title(); ?></div>
				<div class="text page-type"><?php the_excerpt(); ?></div>
	</article>			
	<?php //</a> ?>
