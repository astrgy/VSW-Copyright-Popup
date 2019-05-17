<?php
/*
Plugin Name: VSW Copyright Popup
Plugin URI:  https://developer.wordpress.org/
Description: Add European compliant copyright pop up
Version:     1.0.0
Author:      Ash at verysimplewebsites.com.au
Author URI:  http://verysimplewebsites.com.au
Text Domain: wporg
Domain Path: /languages
License:     GPL2

/*
VSW Copyright Popup is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.
VSW Copyright Popup is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with VSW Copyright Popup. If not, see {URI to Plugin License}.
*/


add_filter( 'the_content', 'my_the_content_filter', 20 );

function my_the_content_filter( $content ) {

	return '
	<style>

		div#copyright {
			background: #fff;
			border: 2px solid #ccc;
			padding: 20px;
			width: 90%;
			position: fixed;
			bottom: -4px;
			left: 5%;
			z-index: 1000;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}

		div#copyright button {
			float: right;
		}

	</style>
	<script>
	function myFunction() {
		var x = document.getElementById("copyright");
		{x.style.display = "none";}
	  }
	</script>
	
	<div id="copyright">
		<button class="btn bg-success text-light" onclick="myFunction()">Close</button>
		<b>This website uses cookies </b><br /><br />We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it with other information that you’ve provided to them or that they’ve collected from your use of their services.<br /><br />By continuing to use this site you agree to our terms and conditions set out on our <a href="/cookies-policy">Cookie Policy Page</a>.
	</div>';
	
}

?>