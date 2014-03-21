<?php 
	if( isset( $_POST['agreedToCookieLaw'] ) ){
		setcookie("cookieLaw", 'accepted', time()+7776000, "/", false, 0, 1); 
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">

		<title>
		<?php
			// Based on Twenty Eleven
			global $page, $paged;

			if( is_home() ){
				_e('Startsida','oacore');
				echo ' | ';
				bloginfo('name');		
			} else {
				wp_title( '|', true, 'right' );
			}
		
			// Add the blog name.
			bloginfo( 'name' );
		
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			/*if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | Startsida";*/
		
			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'ocaore' ), max( $paged, $page ) );
		?>
		</title>

		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'name' ); ?>">
		<!-- meta name="keywords" content="single" / -->
		<!-- meta name="robots" content="" / -->
		<meta name="viewport" content="initial-scale = 1,user-scalable=no,maximum-scale=1.0">
		<meta name="HandheldFriendly" content="true"/> 

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php
		if (is_file(get_template_directory()."/img/favicon.png")) { 
		?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
		<?php
		}
		if (is_file(get_template_directory()."/img/apple-touch-icon.png")) { 
		?>
	    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png" />
		<?php
		}
		?>		
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-ie.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
		<![endif]-->
		
		<?php 
			// Queue threaded comment JavaScript
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			// Kick off WordPress
			wp_head();
		?>
		
	</head>
	<body <?php body_class(); ?>>
	<?php 
		if(!isset($_COOKIE['cookieLaw'])) {
			if( !isset( $_POST['agreedToCookieLaw'] ) ){
	?>
		<div id="cookie" class="">
			<form method="post">
				<p><?php bloginfo( 'name' ); ?> använder kakor för att samla in anonym statistik om besökare, såsom vilka webbläsare som används, vilket land de surfar från, osv.</p>
				<input type="hidden" name="agreedToCookieLaw" id="agreedToCookieLaw" value="true" />
				<input type="submit" value="Jag accepterar användandet av kakor" />
			</form>
		</div>
	<?php } } ?>
		<!-- Header -->
		<header id="header-container" role="banner">
			<div class="wrapper">
				<h1 id="site-title">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>s startsida">
						<img src="<?php echo get_template_directory_uri(); ?>/img/digikom_logo.png" alt="<?php bloginfo( 'name' ); ?>" width="245" height="43" class="logo" />
					</a>
				</h1>
				<nav id="site-nav" role="navigation">
				    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
				<nav id="site-nav-mobile" role="navigation">
					<ul>
						<li><a href="" class="trigger">Meny</a></li>
					</ul>
				</nav>
			</div>
		</header>
	<?php
		if ( is_home() ) {
	?>
		<section id="home-header">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
		</section>
	<?php } ?>