<?php 



add_action('after_setup_theme', 'verum_theme_setup');

function verum_theme_setup(){

	load_theme_textdomain('verum');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height' => 40,
		'width' => 40,
		'flex-height' => true
	));

	add_theme_support('html5', array(
		'search_form', 
		'comment-form', 
		'comment-list', 
		'gallery', 
		'caption'
	));


	add_theme_support('post-formats', array(
		'aside', 
		'image', 
		'video', 
		'gallery'));

	register_nav_menus([
		'primary' => 'Primary menu',
		'footer-menu' => 'Footer',
	]);
}
	
add_filter( 'nav_menu_css_class', 'filter_function_name_8591', 10, 4 );	

function filter_function_name_8591($classes, $item, $args, $depth ){
	if ($args->theme_location === 'primary'){
		$classes = [
			'nav-item',
			'default-nav-item'
		];
		if( $item->current ){
			$classes[] = 'active';
		}
	}
	return $classes;
}

add_action('wp_enqueue_scripts', 'style_theme');



function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	//Styles from html_site
	// wp_register_style( 'canonical', get_template_directory_uri() . ( '//verumtrade.com' ) );
	// wp_enqueue_style( 'canonical' );
	wp_register_style( 'shortcut icon', get_template_directory_uri() . ( '/images/favicons/favicon_verum.ico' ) );
	wp_enqueue_style( 'shortcut icon' );

	wp_register_style( 'icon', get_template_directory_uri() . ( '/images/favicons/favicon_verum.png' ) );
	wp_enqueue_style( 'icon' );

	wp_register_style( 'hamburger', get_template_directory_uri() . ( '/css/hamburgers.css' ) );
	wp_enqueue_style( 'hamburger' );

	wp_register_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'cloud-flare-css',  '//cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css' );
	wp_enqueue_style( 'cloud-flare-css' );

	wp_register_style( 'main-min', get_template_directory_uri() . ( '/css/main.min.css' ) );
	wp_enqueue_style( 'main-min' );

	//Scripts from html_site
	
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'cloud-flare-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' );
	wp_enqueue_script( 'cloud-flare-js' );

	wp_register_script( 'bootstrapcdn', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
	wp_enqueue_script( 'bootstrapcdn' );
	
	wp_register_script( 'tween-max', '//tympanus.net/Development/ProximityFeedback/js/TweenMax.min.js' );
	wp_enqueue_script( 'tween-max' );

	wp_register_script( 'nearby', '//tympanus.net/Development/ProximityFeedback/js/nearby.js' );
	wp_enqueue_script( 'nearby' );

	wp_register_script( 'charming', '//tympanus.net/Development/ProximityFeedback/js/charming.min.js' );
	wp_enqueue_script( 'charming' );

	wp_register_script( 'feedback', get_template_directory_uri() . ( '/js/feedback-modal.js' ) );
	wp_enqueue_script( 'feedback' );

	wp_register_script( 'investor', get_template_directory_uri() . ( '/js/investor-modal.js' ) );
	wp_enqueue_script( 'investor' );

	wp_register_script( 'infinite-decoration', get_template_directory_uri() . ( 'js/infinite-decoration.js' ) );
	wp_enqueue_script( 'infinite-decoration' );

	wp_register_script( 'common', get_template_directory_uri() . ( '/js/common.js' ) );
	wp_enqueue_script( 'common' );
}
add_action( 'customize_register', 'verum_customize_register' );

	function verum_customize_register( $wp_customize ){
		$wp_customize->add_section('first_banner', array(
		'title' => __( 'Первый банер', 'verum_theme'),
		'priority' => 30,
		));

		$wp_customize->add_setting( 'first_line' , array(
			'default' => __( 'Зарабатывайте до 25% в месяц', 'verum_theme'),
			'transport' => 'refresh',
		));

		$wp_customize->add_control('first_line', array(
			'label' => __( 'Первая строка банера', 'verum_theme'),
			'section' => 'first_banner',
			'settings' => 'first_line',
			'type' => 'text'
		));
		

		$wp_customize->add_setting( 'second_line' , array(
			'default' => __( 'Вторая строка банера', 'verum_theme'),
			'transport' => 'refresh',
		));

		$wp_customize->add_control('second_line', array(
			'label' => __( 'Вторая строка банера', 'verum_theme'),
			'section' => 'first_banner',
			'settings' => 'second_line',
			'type' => 'text'
		));

		$wp_customize->add_setting( 'third_line' , array(
			'default' => __( 'на Visa/Mastercard', 'verum_theme'),
			'transport' => 'refresh',
		));

		$wp_customize->add_control('third_line', array(
			'label' => __( 'Третья строка банера', 'verum_theme'),
			'section' => 'first_banner',
			'settings' => 'third_line',
			'type' => 'text'
		));

		$wp_customize->add_setting( 'fourth_line' , array(
			'default' => __( 'С командой ТОП-1 криптоаналитика по версии TradingView', 'verum_theme'),
			'transport' => 'refresh',
		));

		$wp_customize->add_control('fourth_line', array(
			'label' => __( 'Четвертая строка банера', 'verum_theme'),
			'section' => 'first_banner',
			'settings' => 'fourth_line',
			'type' => 'text'
		));
		}
// add_action('customize-register', 'verum_customize_register');
// function verum_customize_register( $wp_customize ) {

// 	$wp_customize->add_setting( 'first_line' , array(
// 		'default' => __('Зарабатывайте до 25% в месяц', 'verum_theme'),
// 		'transport' => 'refresh',
// 	));

// 	$wp_customize->add_section('first_banner', array(
// 		'title' => __('Первый банер', 'verum_theme'),
// 		'priority' => 30,
// 	));

// 	$wp_customize->add_control('first_line', array(
// 		'label' => __('Первая строка банера', 'verum_theme'),
// 		'section' => 'first_banner',
// 		'settings' => 'first_line',
// 		'type' => 'text'
// 	));
// }
	