<?php 

function time_default_functions() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('custom-logo');
	//textdomain
	load_theme_textdomain('time', get_template_directory_uri().'/languages');
	//menu register
	register_nav_menu('main-menu', __('Main Menu','time'));
	
	
	register_post_type('timeslider',array(
		'labels' => array(
			'name' => 'Sliders',
			'add_new_item' => 'Add New Slider'
		),
		'public' => true,
		'supports' => array('title','thumbnail')
	));
	
	
	
	function read_more($limit){
	
		$post_content = explode(" ", get_the_content());
		$less_content = array_slice($post_content, 0, $limit);
		
		echo implode(" ", $less_content);
	}
	
	function time_right_sidebar() {
		register_sidebar(array(
			'id' => 'right-sidebar',
			'name'           => __('Right Sidebar','time'),
			'description'    => __('Add your Right Sidebar','time'),
			'before_widget'  => '',
			'after_widget'   => '</li></ul>',
			'before_title'   => '<h2 class="star">',
			'after_title'    => '</h2><div class="clr"></div><ul class="sb_menu"><li>'

		));
		}
		
	function time_bottom_sidebar_left() {
		register_sidebar(array(
			'id' => 'bottom-sidebar-left',
			'name'           => __('Footer Sidebar Left','time'),
			'description'    => __('Add your Footer Sidebar','time'),
			'before_widget'  => '<div class="col c1">',
			'after_widget'   => '</div>',
			'before_title'   => '<h2>',
			'after_title'    => '</h2>'

		));
	
	}
	function time_bottom_sidebar_right() {
		register_sidebar(array(
			'id' => 'bottom-sidebar-right',
			'name'           => __('Footer Sidebar Right','time'),
			'description'    => __('Add your Footer Sidebar','time'),
			'before_widget'  => '<div class="col c3">',
			'after_widget'   => '</div>',
			'before_title'   => '<h2>',
			'after_title'    => '</h2>'

		));
	
	}
	function time_bottom_sidebar_center() {
		register_sidebar(array(
			'id' => 'bottom-sidebar-center',
			'name'           => __('Footer Sidebar center','time'),
			'description'    => __('Add your Footer Sidebar','time'),
			'before_widget'  => '<div class="col c2">',
			'after_widget'   => '</div>',
			'before_title'   => '<h2>',
			'after_title'    => '</h2>'

		));
	
	}
	function time_logo() {
	add_theme_support('custom-logo', array(
		'height' => 100,
		'width' => 400,
		'flex-width' => true
	));
	}
	
add_action('widgets_init','time_right_sidebar');
add_action('widgets_init','time_bottom_sidebar_left');
add_action('widgets_init','time_bottom_sidebar_right');
add_action('widgets_init','time_bottom_sidebar_center');
}
add_action('after_setup_theme','time_default_functions');

if(file_exists(dirname(__FILE__).'/inc/plugins/init.php')){
	require_once(dirname(__FILE__).'/inc/plugins/init.php');
}