<?php
/**
 * Template Name: Home
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

<div id="firstwrapper" class="wrapper tabs">
	<div class="plain-text">
		<h1>Me</h1>
		<div class="columns">

<p><a href="http://twitter.com/matthewpateman">I follow people</a><br />
	<a href="http://facebook.com/matthewpateman">I like things</a><br />
	<a href="http://github.com/matthewpateman">I commit code</a><br />
	<a href="https://foursquare.com/matthewpateman">I check in at places</a><br />
	<a href="https://plus.google.com/u/0/111409233953555180532">I plus 1 things</a><br/>
	<a href="http://linkedin.com/in/matthewpateman">I am linked in</a><br/>
	<a href="http://about.me/matthewpateman">More about me here</a><br/>
</p>

<p>I currently work in marketing and communications. What I like: Gadgets, tech, web, social media, developing and designing...</p>

<p>I have a background in product design and web development. You can find a selection of my past projects here. To find out more click on any of my linked networks and feel free to tweet me <a href="https://twitter.com/intent/tweet?screen_name=matthewpateman">@matthewpateman</a>.</p>

		</div>
	</div>
</div>

<div class="plain-text wrapper">
	<h1>Projects</h1>
		<p><a href="projects">Here are a selection of my projects</a></p>
</div>

<div class="home-projects articles">
<?php
$args=array(
  
	'post_type' => 'page',
	'post_parent' => 6,
	'posts_per_page' => 3,
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

<div class="plain-text wrapper">
	<h1>Blog</h1>
	<p>
		<a href="blog">View my blog</a>
	</p>
</div>

<div class="home-projects articles">
<?php
$args=array(
  
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1,
  'order' => DESC,
  
);
$my_query = null;
$my_query = new WP_Query($args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>

	<?php get_template_part( 'content', 'article' ); ?>

<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>
