<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div id="share">
	<div class="title">Share</div>
	<div class="plugins">
		<div class="plugin facebook">
			<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="arial"></div>
		</div>
		<div class="plugin twitter">

			<a href="https://twitter.com/share" class="twitter-share-button" data-text='"<?php the_title() ?>" on <?php the_permalink() ?>' data-via="matthewpateman">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
		<div class="plugin google">
			<div class="g-plusone" data-size="medium"></div>
		</div>
	</div>
</div>