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
<style>

header {
	width:100%;
	background: rgba(255,255,255,0.5); /*#E6E6E6;
	border-bottom:1px solid #DCDCDC; */
	box-sizing:border-box;
	z-index:500;
	position: absolute;
	top:0;
}

.header .wrapper {display: block;}

#logo {
	margin: 20px 10px 19px 0px;
	float: left;
	width: 80px;
	height: 50px;
}

#logo svg {
	width:100%;
	height:100%;
}

#logo svg path {
	fill:#6D747A;
}

.wrapper
	{
		width:1024px;
		margin:0 auto;
		padding:0px 20px;
		box-sizing: border-box;
		position: relative;
	}

.header {
	position: fixed;
	width:100%;
	height: 90px;
	background: rgba(245,245,245,0.75);
	z-index:4000;
}

header #menubutton {
	display: none;
}

header nav {
        position: relative;
        display: -webkit-flex;
        display: flex; /* or inline-flex */
        
        
        -webkit-align-items: center;
        align-items: center;

        -webkit-justify-content: center;
        -webkit-align-items: center;

        width: 100%;
        margin: 0 auto;
        height: auto;
}
      
header nav a{
        flex-grow: 1;
        padding: 0 10px;
        font-size: 20px;
        font-weight: 400;
        text-decoration: none;
        line-height: 70px;
        cursor: pointer;
      }

	nav {
		position:absolute;
		z-index: 600;
		top:-70px;
		left:calc(50% - 300px);
		width:600px;

	}


nav ul {
		margin: 0px;
		padding: 0px;
		list-style: none;
	}

	nav ul li {
		height: 40px;
		padding: 0 10px;
		box-sizing:border-box;
		font-size: 20px;
		font-weight: 400;
		float:left;
	}

	nav ul li .icon {display: none;}
	nav ul li span {display: block; float: left; padding:5px;}

#image {
	width:100%;
	position: relative;
	height:200px;
	margin-top:-89px;
	}

#image .wrapper {
	height: 100%;
}

#image span {

	position:absolute;
	bottom: 24px;
	color: #E6E6E6;
	font-size: 45px;
	line-height: 42px;
	letter-spacing: 0px;
	font-weight: 300;
}

@media only screen and (min-width: 481px) and (max-width: 1023px) {

	header {
		height: 69px;
	}

	#logo {
		width: 80px;
		height: 50px;
	}

.wrapper {
	width: 100%;
	margin: 0 auto;
}

}


@media all and (max-width: 480px) {

	header {
		height:70px !important;
	}

	header #menubutton {
	display: block;
	width: 50px;
	height: 50px;
	margin-top: 10px;
	background: URL('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><polygon fill="#6D747A" points="24.5,25.5 17,18 32,18 "/></svg>');
	float: left;
}

	header nav {
		top:0px;
		left:-20px;
		width: calc(100% + 40px);
	}

	.wrapper {
	width: 100%;
	margin: 0 auto;
}

		nav {position:absolute; top:51px; width: 100%; z-index: 600; left:0px;}
	nav ul {margin: 0px; padding: 0px; list-style: none;}
	nav ul li{height: 44px; border-bottom: 1px solid #DCDCDC; box-sizing:border-box; font-size: 14px; background: rgba(255,255,255,0.9); font-weight: 600; width: 100%; padding: 0;}
	nav ul li a {display:block; width:100%; margin:0 auto; padding:10px 20px; box-sizing:border-box; line-height: 24px;}

	nav ul li span {display: block;}

	.hidden {display:none;}

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
		background-image: url('data:image/svg+xml;utf8,<svg width="30px"%20height="30px"%20xmlns="http://www.w3.org/2000/svg"><polygon fill="#6D747A" points="9,11%2021,11%2015,18.201%20"/></svg>');
		background-position: right center;
		line-height: 20px;
		background-repeat: no-repeat;
	}

	.icon {display: none;}

	#grey {
    width: 100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    position: absolute;
    z-index:200;
    top:0;
  }

	.noscroll {
    overflow: hidden;
    position: absolute;
    top:0;
    width:100%;
    height: 100%;
  }

  #image {
  	margin-top:-50px;
  }
}

</style>