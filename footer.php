<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


 ?>
	<footer class="main">
		<div class="wrapper">
			<a class="icon twitter"		target="_blank"		href="http://twitter.com/matthewpateman"></a>
			<a class="icon facebook"	target="_blank"		href="http://facebook.com/matthewpateman"></a>
			<a class="icon github"		target="_blank"		href="http://github.com/matthewpateman"></a>
			<a class="icon foursquare"	target="_blank"		href="https://foursquare.com/matthewpateman"></a>
			<a class="icon google" 		target="_blank"		href="https://plus.google.com/u/0/111409233953555180532?rel=author"></a>
			<a class="icon linkedin"	target="_blank"		href="http://linkedin.com/in/matthewpateman"></a>
			<a class="icon me"			target="_blank"		href="http://about.me/matthewpateman"></a>
			<div class="clear"></div>
		</div><!-- .wrapper -->
	</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/script/script.js" type="text/javascript"></script>

<script>
	$(document).ready(
		function() {
		$("#menubutton").click(function() {
  			$("#site-navigation").toggleClass('hidemenu');
		});


		
 	});


</script>

	 <?php wp_footer(); ?>
</body>
</html>