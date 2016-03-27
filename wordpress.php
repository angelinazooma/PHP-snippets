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





?>