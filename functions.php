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
		'infocentr-footer' => 'infocentr',
		'autorization' => 'autorization',
	]);
}
// add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'filter_function_name_8591', 10, 4 );	

function filter_function_name_8591($classes, $item, $args, $depth ){
	if ($args->theme_location === 'primary'){
			$classes = [
			'nav-item',
			'default-nav-item',
		];
			if( $item->current ){
				$classes[] = 'active';
			}
		}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	if( $item->ID === 107 && $args->theme_location === 'primary' ){
		$classes[] = 'dropdown';
	}

	return $classes;
}
// add_filter( 'nav_menu_css_class', 'filter_function_name_8592', 10, 4 );	

// function filter_function_name_8592($classes, $item, $args, $depth ){
// 	if ($args->theme_location === 'autorization'){
// 			$classes = [
// 			'nav-item',
// 			'special-nav-item'
// 		];
// 			if( $item->current ){
// 				$classes[] = 'active';
// 			}
// 		}
// 	return $classes;
// }
// add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 11, 4 );

// function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
// 	if( $item->ID === 42 && $args->theme_location === 'primary' ){
// 		$classes[] = 'autorization-css-class';
// 	}

// 	return $classes;
// }

// add_filter( 'nav_menu_css_class', 'filter_function_name_9090');

// function filter_function_name_9090($classes, $item, $args, $depth){
// 	if 
// }

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

//Admin-bar style
	
	add_action('admin_bar_init', function(){
	remove_action( 'wp_head', '_admin_bar_bump_cb' ); // html margin bumps
	add_action( 'wp_before_admin_bar_render', 'kama_adminbar_styles' );
	//add_action( 'wp_after_admin_bar_render', 'set_adminbar_styles_show' );
});
function kama_adminbar_styles(){
	// Выходим если админка, можно закомментить...
	if( is_admin() ) return;

	?>
	<style>
		#wpadminbar{ background:none; float:left; width:auto; height:auto; bottom:0; min-width:0 !important; }
		#wpadminbar > *{ float:left !important; clear:both !important; }
		#wpadminbar .ab-top-menu li{ float:none !important; }
		#wpadminbar .ab-top-secondary{ float: none !important; }
		#wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper{ top:0; left:100%; white-space:nowrap; }
		#wpadminbar .quicklinks>ul>li>a{ padding-right:17px; }
		#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper{ left:100%; right:auto; }
		html{ margin-top:0!important; }

		#wpadminbar{ overflow:hidden; width:33px; height:30px; }
		#wpadminbar:hover{ overflow:visible; width:auto; height:auto; background:rgba(102,102,102,.7); }

		/* цвет главной иконки */
		#wp-admin-bar-'.( is_multisite() ? 'my-sites' : 'site-name').' .ab-item:before{ color:#797c7d; }

		/* прячем wp-logo */
		#wp-admin-bar-wp-logo{ display:none; }
		/* #wp-admin-bar-search{ display:none; } */

		/* правка для twentysixteen */
		body.admin-bar:before{ display:none; }

		/* Для админки --- */
		@media screen and ( min-width: 782px ) {
			html.wp-toolbar{ padding-top:0 !important; }
			#wpadminbar:hover{ background:rgba(102,102,102,1); }
			#adminmenu{ margin-top:48px !important; }
		}

		/* Gutenberg */
		#wpwrap .edit-post-header{ top:0; }
		#wpwrap .edit-post-sidebar{ top:56px; }

	</style>
	<?php
	$styles = ob_get_clean();

	echo preg_replace( '/[\n\t]/', '', $styles ) ."\n";
}



// class CSS_Menu_Walker extends Walker {
// 	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
// 	function start_lvl(&$output, $depth = 0, $args = array()) {
// 		$indent = str_repeat("t", $depth);
// 		$output .= "n$indent<ul>n";
// 	}
	
// 	function end_lvl(&$output, $depth = 0, $args = array()) {
// 		$indent = str_repeat("t", $depth);
// 		$output .= "$indent</ul>n";
// 	}
	
// 	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
// 		global $wp_query;
// 		$indent = ($depth) ? str_repeat("t", $depth) : '';
// 		$class_names = $value = '';
// 		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
// 		/* Добавление активного класса */
// 		if (in_array('current-menu-item', $classes)) {
// 			$classes[] = 'active';
// 			unset($classes['current-menu-item']);
// 		}
		
// 		/* Проверка наличия дочерних элементов */
// 		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
// 		if (!empty($children)) {
// 			$classes[] = 'has-sub';
// 		}
		
// 		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
// 		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
// 		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
// 		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
// 		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
// 		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
// 		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
// 		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
// 		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
// 		$item_output = $args->before;
// 		$item_output .= '<a'. $attributes .'><span>';
// 		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
// 		$item_output .= '</span></a>';
// 		$item_output .= $args->after;
		
// 		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
// 	}
	
// 	function end_el(&$output, $item, $depth = 0, $args = array()) {
// 		$output .= "</li>n";
// 	}