<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eos_demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php  echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- PAGE LEVEL PLUGIN STYLES -->
	<link href="<?php  echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">

	<!-- THEME STYLES -->
	<link href="<?php  echo get_template_directory_uri(); ?>/css/layout.min.css" rel="stylesheet" type="text/css"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico"/>
    </head>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--========== HEADER ==========-->
	<header class="header navbar-fixed-top">
		<!-- Navbar -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="menu-container">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="toggle-icon"></span>
					</button>

					<!-- Logo -->
					<div class="logo">
						<a class="logo-wrap" href="index.html">
							<img class="logo-img logo-img-main" src="<?php  echo get_template_directory_uri(); ?>/img/logo.png" alt="Asentus Logo">
							<img class="logo-img logo-img-active" src="<?php  echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="Asentus Logo">
						</a>
					</div>
					<!-- End Logo -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-collapse">
					<div class="menu-container">
						<ul class="navbar-nav navbar-nav-right">
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.html">Products</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<!-- End Navbar Collapse -->
			</div>
		</nav>
		<!-- Navbar -->
	</header>
	<!--========== END HEADER ==========-->
