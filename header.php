<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,100italic,300italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<section class="header">
		<header>
			<h1 class="logo">
				start with a square
				<img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.svg">
			</h1>
			<span class="beta">BETA</span>
		</header>
	</section>
	

	<section class="wrap">
