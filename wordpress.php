<?php

// add a custom home button to the header nav
// includes a font awesome home icon
// functions.php

add_filter('wp_nav_menu_items', 'aa_custom_menu', 10, 2);
function aa_custom_menu( $items,$args ) {
	if($args->theme_location == 'main_nav') {
		$newitems = '<li id="home"><a href="'.esc_url(home_url('/')).'" title=""><i class="fa fa-home"></i><strong>Home</strong></a></li>';
		$items = $newitems.$items;
	}
	return $items;
}


// add fonts to theme
// this function adds both font awesome and google fonts css to the theme

function add_fonts() {
	wp_register_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), null );
	wp_enqueue_style('font_awesome');
	wp_register_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:300,600,300italic,600italic', array(), null );
	wp_enqueue_style('googlefonts');
}         
add_action('wp_enqueue_scripts', 'add_fonts');




?>