<?php

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'team-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

// Register nav menus
register_nav_menus(
	array(
		'main' => 'Main Sections',
		'sub'=> 'Articles'
	));