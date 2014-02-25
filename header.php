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
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
<link rel="apple-touch-icon-precomposed" 					href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" 		href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad-retina.png" />
<style>

header {
	width:100%;
	background: #E6E6E6;
	border-bottom:1px solid #DCDCDC;
	position: relative;
	overflow: hidden;
	z-index:500;
}

body {
	background: #F8F8F8;
	color: #6D747A;
	-webkit-text-size-adjust: 100%; 
	margin:0px;
	padding:0px;
}

#logo {
	margin: 10px 10px 10px 0px;
	float: left;
}

#logo svg {
	width:100%;
	height:100%;
}

#logo svg path {
	fill:#6D747A;
}

#image {
	width:100%;
	position: relative;
	height:200px;
	}

#image .wrapper {
	height: 100%;
}

#image span {

	position:absolute;
	bottom: 24px;
	color: #E6E6E6;
	font-size: 36px;
	line-height: 42px;
	letter-spacing: 0px;
	font-weight: 300;
}

@media all and (min-width: 481px) {

	header {
		height: 70px;
	}

	#logo {
		width: 80px;
		height: 50px;
	}
	

	#menu {display: none;}

}

@media all and (max-width: 480px) {

	#logo {
		width: 48px;
		height: 30px;
	}

	#menu {
		float:left;
		font-weight: 600;
		text-transform: uppercase;
		padding: 15px 28px 15px 5px;
		font-size: 12px;
		background-image: url('data:image/svg+xml;utf8,<svg%20width="30px"%20height="30px"%20xmlns="http://www.w3.org/2000/svg"><polygon%20fill="#6D747A"%20points="9,11%2021,11%2015,18.201%20"/></svg>');
		background-position: right center;
		line-height: 20px;
		background-repeat: no-repeat;
	}

	.icon {display: none;}

	#grey {width: 100%; height:100%; background:rgba(0,0,0,0.5); position: absolute; z-index:200; top:0;}
	
	.noscroll {overflow: hidden; position: absolute; top:0; width:100%; height: 100%;}

}

</style>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script>

function getHeight() {
	var height = window.innerHeight - document.getElementsByTagName('header')[0].offsetHeight;
	document.getElementById("image").style.height= height + "px" ;
}

window.onresize=function(){
	getHeight();
};

</script>
<?php 

	// META DATA
	get_template_part( 'content', 'meta' );
 
	// Google Analytics
	get_template_part( 'content', 'analytics' );
?>
</head>
<body <?php body_class(); ?>>
<div id="bodywrapper">
<header>
	<div class="wrapper">
	<div id="logo">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="48px" height="30px" viewBox="0 0 48 30" enable-background="new 0 0 48 30" xml:space="preserve">
			<path  d="M14.878,20.705c0.195,1.86,0.359,3.212,0.493,4.055l0.832-0.201
				C15.824,23.527,15.382,22.244,14.878,20.705z M9.94,22.213c-0.078-0.32-0.177-0.517-0.3-0.588
				c-0.123-0.072-0.34-0.071-0.652,0.005l0.578,2.381c0.07-0.013,0.129-0.025,0.179-0.037c0.221-0.054,0.36-0.146,0.419-0.276
				c0.059-0.13,0.046-0.369-0.038-0.716L9.94,22.213z M15.807,26.419l1.408,1.435l-0.538-1.646L15.807,26.419z M45.435,16.496
				l0.788,3.366l1.517,0.593L45.435,16.496z M33.729,17.146l0.597,5.805l0.947,0.531l-0.004-0.017L33.729,17.146z M31.789,23.371
				l1.132,0.683l-2.402-5.982L31.789,23.371z M43.871,21.022l-0.001-0.002l-0.021-0.009L43.871,21.022z M10.862,25.401
				c0.002-0.001,0.003-0.002,0.006-0.002l-0.012-0.015L10.862,25.401z M42.147,11.873l2.033-0.494l2.396,3.894l-1.026-4.227
				l2.043-0.496l-1.888-0.425l-0.039,0.013l-1.506,0.366c-0.581-1.269-1.176-2.729-1.787-4.38c0.084,0.75,0.243,2.316,0.479,4.697
				L40.058,11.5l-3.112-8.423l2.188-0.531l0.971,2.967l0.938,2.866c-0.28-1.531-0.554-3.564-0.818-6.098l2.336-0.567
				c0.09,0.248,0.401,1.182,0.936,2.802l1.052,3.235c-0.379-2.129-0.667-4.232-0.864-6.31l2.186-0.531L31.6,0l-1.643,0.399
				l0.031,0.277l-0.875-0.072L27.356,1.03l0.032,0.288l-0.852-0.089l-1.644,0.399l0.047,0.115l-0.346-0.042l-2.789,0.677l0.083,0.29
				l-0.765-0.124l-1.695,0.411l0.017,0.222l-0.519-0.1L17.23,3.489l0.048,0.191l-0.434-0.097l-3.797,0.922L9.343,5.404l0.086,0.368
				L8.831,5.529L6.383,6.124l0.095,0.967L5.222,6.405L3.018,6.941L3.114,7.81L2.187,7.142L0,7.674l1.582,6.514l0.417,0.537
				l-0.248,0.083l1.713,7.055L8.433,30l-2.279-9.387l2.456-0.596c0.664-0.161,1.187-0.233,1.57-0.215
				c0.382,0.018,0.688,0.104,0.915,0.256c0.228,0.153,0.407,0.363,0.539,0.627c0.131,0.265,0.269,0.691,0.412,1.278l0.198,0.818
				c0.146,0.599,0.19,1.05,0.133,1.354s-0.232,0.57-0.526,0.797c-0.244,0.188-0.572,0.344-0.982,0.466l2.65,3.325l0.027,0.034
				l-1.038-9.688l3.523-0.855l3.088,7.58l1.373,1.277l-1.822-7.503l-1.439,0.35l-0.458-1.885l5.333-1.295l0.458,1.885l-1.45,0.352
				l1.201,4.94l2.635,2.073l-2.279-9.387l4.065-0.987l0.458,1.884l-1.622,0.395l0.433,1.781l1.519-0.369l0.433,1.781l-1.519,0.369
				l0.499,2.056l1.781-0.433l0.267,1.101l0.9,0.611l-2.279-9.387l3.148-0.765c0.228,0.543,0.485,1.185,0.775,1.925l0.926,2.304
				l-0.507-4.518l3.183-0.773l2.168,8.999l0.545,0.283l-1.038-9.688l3.524-0.855l3.542,8.706l0.557,0.239L42.147,11.873z
				 M10.906,18.579l-1.424-5.851l0.636,6.042l-1.393,0.338l-2.214-5.52l1.386,5.721l-1.97,0.479l-2.105-8.667l2.911-0.707
				c0.21,0.502,0.449,1.095,0.715,1.779l0.855,2.126l-0.465-4.173l2.933-0.712l2.105,8.667L10.906,18.579z M16.659,17.182
				l-0.499-1.529l-0.804,0.195l0.249,1.59l-2.333,0.567l-0.956-8.946l3.257-0.791l3.395,8.354L16.659,17.182z M19.695,16.444
				l-1.683-6.931l-1.336,0.324l-0.421-1.736l4.928-1.196l0.421,1.735l-1.336,0.325l1.684,6.932L19.695,16.444z M24.749,15.218
				l-1.683-6.932L21.729,8.61l-0.421-1.736l4.927-1.196l0.421,1.736L25.32,7.738l1.684,6.932L24.749,15.218z M31.777,13.511
				l-0.885-3.643l-0.668,0.162l0.885,3.643l-2.256,0.548l-2.104-8.667l2.256-0.548L29.756,8.1l0.668-0.162l-0.751-3.094l2.255-0.548
				l2.104,8.667L31.777,13.511z M34.94,12.743l-2.105-8.667l3.757-0.913l0.421,1.736l-1.502,0.365l0.399,1.644l1.405-0.341
				l0.401,1.65l-1.405,0.341l0.461,1.901l1.65-0.401l0.421,1.736L34.94,12.743z M14.961,14.317l0.768-0.186
				c-0.349-0.954-0.757-2.141-1.223-3.558C14.683,12.288,14.835,13.536,14.961,14.317z M40.104,20.52l1.413,1.446l-0.542-1.658
				L40.104,20.52z M39.176,14.805c0.195,1.86,0.359,3.212,0.493,4.055l0.831-0.202C40.121,17.627,39.68,16.343,39.176,14.805z"/>
</svg>


	</div>
	<div id="menu">Menu</div>
	<div class="clear"></div>
</div>
</header>
<nav class="hidden">

<?php wp_nav_menu( array('depth' => 1 ) ); ?>

</nav>
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