<?php

define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT . '/imgs' );
define('SCRIPTS', THEMEROOT . '/js' );
define('FRAMEWORK', get_template_directory() . '/framework');


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-thumbnails');


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



 //Enqueue scripts and styles.
 

function ab_scripts() {

    wp_enqueue_style('custom', THEMEROOT . '/src/css/style.min.css', false);
    wp_enqueue_script( 'theme-script', THEMEROOT . '/src/js/script.min.js',  '1', true );
    //load jquery in the blog-based pages

}

add_action( 'wp_enqueue_scripts', 'ab_scripts' );


?>
