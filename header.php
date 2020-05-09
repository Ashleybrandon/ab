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

    <body id="body" <?php body_class(); ?>>

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
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><g transform="translate(166 235)"><rect width="55" height="55" transform="translate(-166 -235)" fill="#222"/><path d="M17.817,2.127a2.05,2.05,0,0,1-.873.175c-.559,0-.978-.419-.978-1.153V-5.837c0-4.122-2.585-6.532-7.091-6.532-4.192,0-7.091,2.131-7.371,5.834h3C4.718-8.6,6.22-9.75,8.665-9.75c2.76,0,4.227,1.467,4.227,3.843v1.118h-3.6C4.543-4.789,1.12-3.252,1.12.45c0,2.725,1.921,4.646,5.8,4.646,3.808,0,5.38-1.816,6.008-2.795A3.03,3.03,0,0,0,16.106,5.1a6.779,6.779,0,0,0,1.956-.279Zm-10.27.489c-2.306,0-3.284-.873-3.284-2.306,0-1.886,1.642-2.864,4.856-2.864h3.773v1.188C12.892.206,11.006,2.616,7.547,2.616ZM30.253-12.37A6.567,6.567,0,0,0,24.42-9.331V-19.88H21.346v24.8h3l.07-2.62A6.18,6.18,0,0,0,30.044,5.1c4.786,0,8-3.668,8-8.943C38.043-9.051,34.9-12.37,30.253-12.37ZM29.834,2.476C26.1,2.476,24.42-.7,24.42-3.287v-.769A5.509,5.509,0,0,1,29.9-9.75c3.074,0,5,2.34,5,5.973C34.9-.074,32.908,2.476,29.834,2.476Z" transform="translate(-158 -201)" fill="#fff"/></g></svg>
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

