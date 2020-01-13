<?php 

if(site_url() == "http://localhost/cftea"){
	define ("VERSION", time());
}else{
	define("VERSION", wp_get_theme()->get("Version"));
}

//Theme assets

function cftea_assets(){
	wp_enqueue_style( 'cftea_superfish_css', get_theme_file_uri(). '/assets/css/superfish.css', null, VERSION );
	wp_enqueue_style( 'cftea_main_style', get_stylesheet_uri(), null, VERSION );

	wp_enqueue_script( 'cftea_main_js', THEMEROOT.'/assets/js/main.js', array( 'jquery' ), VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'cftea_assets' );