<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php if (is_single()) { ?>
	<div class="date"><?php the_date(); ?></div>
<?php } ?>
<?php if (!is_page('about')) { ?>

<?php // get_template_part( 'content', 'share2' ); 

} ?>
			<?php the_content(); ?>


<?php if (is_single()) { ?>
Tags <div class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?> </div>
<?php } ?>