<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="VerumTrade"/>
		<!-- <link rel="canonical" href="http://verumtrade.com"/>
		<link rel="shortcut icon" href="./images/favicons/favicon_verum.ico">
		<link rel="icon" type="image/png" href="./images/favicons/favicon_verum.png" sizes="16x16">
		<link rel="stylesheet" href="css/hamburgers.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> -->
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<nav class="navbar navbar-expand-xl toBottomAnimated" id="tenth"><a class="brand" href="home"><span><?php bloginfo( 'name'); ?></span></a>
					<div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
						
						<div id="weglot_here"></div>
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'container'       => null,
							'menu_class'      => 'navbar-nav',
							'echo'            => true,
							'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
							'depth'           => 3,
						) );
						?>
						
					</div>
					<!-- <button class="hamburger hamburger--spin" id="hamburger" type="button" onclick="openMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
				</nav> -->
			</div>
		</header>