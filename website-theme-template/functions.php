<?php
function long_brothers_theme_enqueue_styles(){
	// WP Feedback Fix: 
	// Theme Files:
	wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap');
	wp_enqueue_style('google-fonts-muli', 'https://fonts.googleapis.com/css?family=Muli:400,500,700&display=swap');

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'child-style', get_template_directory_uri().'/style.css');
	wp_enqueue_script('social-links-new-window', get_theme_file_uri('/js/social-links.js'), NULL, '1.0', true);

}
// Enable SVG uploads. 
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}

function wp_feedback_styles(){
	wp_enqueue_style( get_the_permalink().'/wp-content/plugins/wpfeedback/css/wpf-login.css?ver=1.2.0' );
	wp_enqueue_style( get_the_permalink().'/wp-content/plugins/wpfeedback/css/wpfb-front.css?ver=1.2.0' );
	wp_enqueue_style( get_the_permalink().'/wp-content/plugins/wpfeedback/css/bootstrap.min.css?ver=1.2.0' );
}
function footerLogo(){
	$imagePath = site_url()."/wp-content/uploads/2019/12/footer-logo.jpg";
	echo "<img class='footer-logo' src='$imagePath'/>";
}
function pre_footer(){
	$template_directory = get_stylesheet_directory_uri();
	get_template_part('_custom-components/content', 'footerBefore-2');
}
function custom_footer_links(){
	$template_directory = get_template_directory();
	get_template_part('_custom-components/content', 'footerCustomLinks');
}
add_action('get_header', 'long_brothers_image_path_fix');
add_action('wp_enqueue_scripts', 'long_brothers_theme_enqueue_styles', 10);
add_action('wp_feedback_styles', 'wp_feedback_enqueue_styles', 11);
add_filter('upload_mimes', 'add_file_types_to_uploads');
// Removes the wordpress version number from the meta data in head. 
remove_action('wp_head', 'wp_generator');

?>