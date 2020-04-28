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
                    <svg class="header-logo" width="42" height="42" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="logo-circle" cx="60" cy="60" r="60" fill="white" style="fill: rgb(17, 17, 17);"></circle>
                    <path d="M64.9998 74V64.9H91.9098C94.3798 64.9 96.4598 66.98 96.4598 69.45C96.4598 71.92 94.3798 74 91.9098 74H64.9998ZM58.4998 100H64.9998V80.5H91.9098C98.0198 80.5 102.96 75.56 102.96 69.45C102.96 63.34 98.0198 58.4 91.9098 58.4H64.9998V29.8H90.6098C93.0798 29.8 95.1598 31.88 95.1598 34.35C95.1598 36.69 93.2098 38.77 90.9998 38.9C95.1599 38.9 97.7598 39.42 100.1 40.07C101.01 38.38 101.66 36.43 101.66 34.35C101.66 28.24 96.7198 23.3 90.6098 23.3H58.4998V100Z" class="logo-type" fill="#111111" style="fill: rgb(255, 255, 255);"></path>
                    <path class="logo-type" d="M16.0898 85H23.4998L33.5098 65.5H64.1898L45.2098 28.58L16.0898 85ZM36.7598 59L45.2098 42.75L53.5298 59H36.7598Z" fill="#222222" style="fill: rgb(255, 255, 255);"></path>
                    </svg>
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

