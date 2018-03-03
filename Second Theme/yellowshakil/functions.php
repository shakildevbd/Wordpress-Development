<?php 
function yellow_theme_functions(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('custom-logo');

//load textdomain
load_theme_textdomain('yellow', get_template_directory_uri.'/languages');

//registering menu
register_nav_menus(array(
	'primary-menu' => __('Header Menu','yellow'),
));

//read more
function read_more($limit){
	$post_content = explode(" ", get_the_content());
	$less_content = array_slice($post_content, 0, $limit);
	
	echo implode(" ", $less_content);
}

//right sidebar
function right_sidebar(){
	register_sidebar(array(
		'id'            => 'right-sidebar',
		'name'          => __('Right Sidebar','yellow'),
		'description'   => __('Add Your Right Sidebar','yellow'),
		'before_widget' => '<div class="clearfix single_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));}
function footer_sidebar(){
	register_sidebar(array(
		'id' => 'footer-sidebar',
		'name' => __('Footer Widgets','yellow'),
		'description' => __('Add Your Footer Widgets','yellow'),
		'before_widget' => '<div class="clearfix single_footer_top floatleft">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		));
}

add_action('widgets_init','right_sidebar');
add_action('widgets_init','footer_sidebar');
}
add_action('after_setup_theme','yellow_theme_functions'); 
?>