<?php

define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT . '/src/imgs' );
define('STYLES', THEMEROOT . '/src/css' );
define('SCRIPTS', THEMEROOT . '/src/js' );

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-thumbnails');

// add_action('wp_head', 'show_template');
// function show_template() {
//     global $template;
//     echo basename($template);
// }

//enable widgets

if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'name'=>'Sidebar Widget 1',
       'id' => 'sidebar1',
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widgettitle">',
       'after_title' => '</h4>',
   ));
}


if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'name'=>'Sidebar Widget 2',
       'id' => 'sidebar2',
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widgettitle">',
       'after_title' => '</h4>',
   ));
}




// Theme defaults and registering supported features

if ( ! function_exists( 'ab_setup' ) ) {
    function ab_setup() {
        
        /*Make the theme available for translation*/
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain( 'ab', $lang_dir );
        
        /*Add support for post formats*/
        
        add_theme_support( 'post-formats',
                         array(
                         'gallery',
                         'link',
                         'image',
                         'quote',
                         'video',
                         'audio'
                        
                         )
                    );
        /*Add support for automatic feed links*/
        add_theme_support( 'automatic-theme-links' );
            
        /*Add support for post thumbnails*/
        add_theme_support( 'post-thumbnails' );
            
        
    }
    
    add_action( 'after_setup_theme', 'ab_setup' );
}

//nav menus

register_nav_menus( array(
    'main-menu'       => __( 'main-menu', 'ab' ),
    'secondary-menu'        => __( 'secondary-menu', 'ab' ),	
) );




//ajax search functionality

function advancedSearch() {

	$recipe = $_POST['recipe_name'];

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		's' => $recipe
	);
	$recipe_results = get_posts($args);
	$list = array();
	foreach($recipe_results as $recipe) {
		setup_postdata($recipe);
		$list[] = array(
			'object' => $recipe,
			'id' => $recipe->ID,
			'name' => $recipe->post_title,
			'content' => $recipe->post_content,
			'image' => get_the_post_thumbnail ($recipe->ID, 'entry'),
			'link' => get_permalink($recipe->ID)
		);

	}
	header("Content-type: application/json");
	echo json_encode($list);
	die;
}

add_action('wp_ajax_nopriv_advancedSearch', 'advancedSearch');
add_action('wp_ajax_advancedSearch', 'advancedSearch');


 //Enqueue scripts and styles.
 

function ab_scripts() {

    wp_enqueue_style('custom', STYLES . '/style.min.css', false);
    wp_enqueue_script( 'theme-script', SCRIPTS . '/script.min.js',  '1', true, true );

    if (is_page_template( 'page-blog.php' )) {
        wp_enqueue_script( 'ajax_search', SCRIPTS . '/ajax.js', array('jquery'), '2', true, true );
     }


    wp_localize_script('ajax_search', 'admin_url', array( 'ajax_url' => admin_url('admin-ajax.php')));

}

add_action( 'wp_enqueue_scripts', 'ab_scripts' );




?>
