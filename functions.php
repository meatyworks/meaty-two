<?php

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'team-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
set_post_thumbnail_size( 150, 150, true ); // 50 pixels wide by 50 pixels tall, crop mode

// Register nav menus
register_nav_menus(
	array(
		'main' => 'Main Sections',
		'sub'=> 'Articles'
	));