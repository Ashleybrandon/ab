<?php
/*
* header.php
*
* The header for the theme.
*/
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo ('charset'); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title( '|', true, 'right'); ?><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Ashley Brandon">
    <?php wp_head(); ?>

    </head>

    <body id="body" class=" <?php body_class(); ?>">

    <nav class="mobile-menu" id="mobile-menu">
        <?php wp_nav_menu( array( 
              'theme_location' => 'main-menu', 
              'depth'           => 2
            //   'container'       => 'div',
            //   'container_class' => 'ml-auto',
            //   'container_id'    => 'bs-example-navbar-collapse-2',
            //   'menu_class'      => 'navbar-nav ml-auto',
              
                ) 
            ); 
        ?>
    </nav> <!--end mobile menu-->
                
    <nav class="container main-nav" id="main-nav">
        <div class="row">
            <div class="col-6 menu-logo">
                <a href="<?php echo get_home_url(); ?>" class="main-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 215 215"><g transform="translate(435 895)"><rect width="215" height="215" transform="translate(-435 -895)" fill="#293e96"/><path d="M58.41,0H68.2L40.37-75.46H29.26L1.43,0h9.79l6.93-19.14H51.48ZM21.34-27.72,34.87-64.68,48.29-27.72Zm98.34-11.99v-.22c3.63-1.32,10.12-6.38,10.12-16.72,0-10.78-7.48-18.81-20.46-18.81H79.64V0h29.92c14.08,0,22.99-8.03,22.99-20.9C132.55-31.9,126.17-37.95,119.68-39.71Zm.33-15.51c0,6.93-4.07,12.21-12.65,12.21H89.32V-66.99h18.15C115.17-66.99,120.01-62.81,120.01-55.22ZM109.34-8.36H89.32V-35.09h19.36c8.69,0,14.08,4.4,14.08,13.42C122.76-12.76,117.48-8.36,109.34-8.36Z" transform="translate(-394 -750)" fill="#fff"/></g></svg>
                </a>

            </div>

            <div class="col-6" style="display: none">
                <ul>
                    <li class="menu-icon">
                            <svg id="nav-toggle" width="28" height="28" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
                            <g>
                            <path class="menu-bar menu-bar-one" d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z" fill="currentColor"/>
                            <path class="menu-bar menu-bar-two" d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z" fill="currentColor"/>
                            <path class="menu-bar menu-bar-three" d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z" fill="currentColor"/>
                            </g>
                            </svg>
                    </li>
                </ul>
        </div>
        <div class="col-6">
        <?php wp_nav_menu( array( 
              'theme_location' => 'main-menu', 
              'depth'           => 2
            //   'container'       => 'div',
            //   'container_class' => 'ml-auto',
            //   'container_id'    => 'bs-example-navbar-collapse-2',
            //   'menu_class'      => 'navbar-nav ml-auto',
              
                ) 
            ); 
        ?>
        </div>
        </div>
    </nav>

