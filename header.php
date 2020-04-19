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
            <div class="col-4 menu-logo">
                <a href="<?php echo get_home_url(); ?>" class="main-logo">ashbrandon_</a>

            </div>
        <div class="col-4">

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
        <div class="col-4">
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

