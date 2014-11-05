<?php
/**
 * The Header.
 *
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MEATY WORKS</title> <!--EK EDIT-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="FA68Cdvtx09MyAyQsB62fAXnr7ruNHNfkIn83u-vz-w" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/stylesheets/animate.css">

        <?php wp_enqueue_script("jquery"); ?>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>

<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="container">
<?php if(!is_home()) { ?>
<div class="col-md-12" id="steak">
	<a href="<?php bloginfo('home'); ?>"><img class="steak" src="<?php echo get_template_directory_uri(); ?>/img/meatyfinal.svg" onerror=/"this.src=<?php echo get_template_directory_uri(); ?>/img/meatyfinal.jpg" alt="Meaty Works Digital Studio"></a>
 </div> 


 	
 	<div class="col-md-12 clearfix meaty-main-menu">
 	
 	
 	<h2 class="tagline">Fresh Designs // Lean Cuts //  Locally Sourced </h2>
 	
 	 	<div class="col-md-12 clearfix mobile-meaty">
		<h1 id="activate-mobile">
			<span class="glyphicon glyphicon-plus"></span>
		</h1>
	</div>
 	
		<?php

$defaults = array(
	'theme_location'  => 'main',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'main-menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>	
	</div>
<?php } else { ?>

<a href="/about/"><img class="steak animated fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/meatyfinal.svg" onerror=/"this.src=<?php echo get_template_directory_uri(); ?>/img/meatyfinal.jpg" alt="Meaty Works Digital Studio" alt="Meaty Works Digital Studio"></a>

<?php } ?>

</header>


