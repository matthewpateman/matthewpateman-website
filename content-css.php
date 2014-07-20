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
    position: absolute;
    top:0px;
    text-align: center;
    z-index: 600;
    width: 100%;
}

header nav ul {
	position: relative;
	display: block;
	margin: 0px auto;
	padding: 0px;
	list-style: none;
}


nav ul li {
	display: inline;
	height: 40px;
	padding: 0 20px;

	font-size: 20px;
	font-weight: 400;
	line-height: 90px;

    cursor: pointer;	
}

header nav a{
	text-decoration: none;
}

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

@media only screen and (min-width: 601px) and (max-width: 1023px) {

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


@media all and (max-width: 600px) {

	header {
		height:70px !important;
		background: green;
	}

	header #menubutton {
		position: relative;
		display: block;
		width: 40px;
		height: 40px;
		margin-top: 15px;
		float: right;
	}

	header nav {
    	position: absolute;
    	top:70px;
    	text-align: left;
    	z-index: 600;
    	width: 100%;

	}

	header nav ul {
		position: relative;
		display: block;
		margin: 0px auto;
		padding: 0px;
		list-style: none;
	}


nav ul li {
	display: block;
	height: 40px;
	padding: 0;

	font-size: 24px;
	font-weight: 400;
	line-height: 90px;

    cursor: pointer;	
}

header nav a{
	text-decoration: none;
}



	header nav {
		width: calc(100% + 40px);
	}

	.wrapper {
	width: 100%;
	margin: 0 auto;
}

		nav {position:absolute; top:51px; width: 100%; z-index: 600; left:0px;}
	nav ul {margin: 0px; padding: 0px; list-style: none;}
	nav ul li{height: 44px; border-bottom: 1px solid #DCDCDC; box-sizing:border-box; font-size: 18px; background: rgba(245,245,245,0.9); font-weight: 600; width: 100%; padding: 0;}
	nav ul li:first-child{border-top: 1px solid #DCDCDC;}
	
	nav ul li a {display:block; width:100%; margin:0 auto; padding:10px 20px; box-sizing:border-box; line-height: 24px;}

	nav ul li span {display: block;}

	.hidden {display:none;}

	.button_line {
	    width: 34px;
	    height: 3px;
	    background: #6D747A;
	    position: absolute;
	}
	#button_top_line {
	    top: 8px;
	    left: 3px;
	}
	#button_middle_line {
	    top: 18px;
	    left: 3px;
	}
	#button_bottom_line {
	    top: 28px;
	    left: 3px;
	}
	#menubutton.open #button_top_line {
	    -webkit-animation: openFirstLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: openFirstLine 0.5s;
	}
	#menubutton.closed #button_top_line {
	    -webkit-animation: closeFirstLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: closeFirstLine 0.5s;
	}
	#menubutton.open #button_middle_line {
	    -webkit-animation: openMiddleLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: openMiddleLine 0.5s;
	}
	#menubutton.closed #button_middle_line {
	    -webkit-animation: closeMiddleLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: closeLine 0.5s;
	}
	#menubutton.open #button_bottom_line {
	    -webkit-animation: openBottomLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: bottomLine 5s;
	    \
	}
	#menubutton.closed #button_bottom_line {
	    -webkit-animation: closeBottomLine 0.3s forwards ease;
	    /* Chrome, Safari, Opera */
	    animation: closeBottomLine 5s;
	}
	/* Chrome, Safari, Opera */
	@-webkit-keyframes openFirstLine {
	    0% {
	        top:8px;
	        left:3px;
	    }
	    100% {
	        top: 18px;
	        left: 3px;
	        -webkit-transform: rotate(135deg);
	    }
	}
	@-webkit-keyframes closeFirstLine {
	    0% {
	        top:18px;
	        left:3px;
	        -webkit-transform: rotate(-45deg);
	    }
	    100% {
	        top: 8px;
	        left: 3px;
	        -webkit-transform: rotate(0deg);
	    }
	}
	@-webkit-keyframes openMiddleLine {
	    0% {
	        top:18px;
	        left:3px;
	        opacity: 1;
	    }
	    100% {
	        top:18px;
	        left:3px;
	        opacity: 0;
	        -webkit-transform: rotate(45deg);
	    }
	}
	@-webkit-keyframes closeMiddleLine {
	    0% {
	        top:18px;
	        left:3px;
	        opacity: 0;
	        -webkit-transform: rotate(-45deg);
	    }
	    100% {
	        top:18px;
	        left:3px;
	        opacity: 1;
	        -webkit-transform: rotate(0deg);
	    }
	}
	@-webkit-keyframes openBottomLine {
	    0% {
	        top:28px;
	        left:3px;
	    }
	    100% {
	        left:3px;
	        top:18px;
	        -webkit-transform: rotate(45deg);
	    }
	}
	@-webkit-keyframes closeBottomLine {
	    0% {
	        left:3px;
	        top:18px;
	        -webkit-transform: rotate(-135deg);
	    }
	    100% {
	        -webkit-transform: rotate(0deg);
	        top:28px;
	        left:3px;
	    }
	}
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