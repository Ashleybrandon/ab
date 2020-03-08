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
        <ul>
            <li class="dark-mode-icon">
                <a href="#">
                        <svg aria-hidden="true" width="16" focusable="false" data-prefix="far" data-icon="lightbulb" class="svg-inline--fa fa-lightbulb fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"></path></svg>
                </a>
            </li>
        </ul>
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
                <li class="dark-mode-icon" id="dark-mode-icon">
                    <a href="#">                        
                        <svg aria-hidden="true" width="16" focusable="false" data-prefix="far" data-icon="lightbulb" class="svg-inline--fa fa-lightbulb fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"></path></svg>
                    </a>
                </li>
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

