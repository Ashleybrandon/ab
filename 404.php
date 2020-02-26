<?php
/* 
Template Name: 404.php

Generic template file

 */

?>


<?php get_header(); ?>


<div id="pagehead">


    <div class="container">
        

<div class="nav-box">
   <?php  
    
    // $args = array(
    //     'theme_location' => 'primary'
    // );

    // ?>

     <?php // wp_nav_menu( $args ); ?>
    </div>
    
    


    </div>
</header>
</div>

<div class="container" style="margin:20rem 0;">
<div style="width:100%;text-align:center;">
<svg width="88" height="88" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="60" cy="60" r="60" fill="#111111"/>
        <path d="M64.9998 74V64.9H91.9098C94.3798 64.9 96.4598 66.98 96.4598 69.45C96.4598 71.92 94.3798 74 91.9098 74H64.9998ZM58.4998 100H64.9998V80.5H91.9098C98.0198 80.5 102.96 75.56 102.96 69.45C102.96 63.34 98.0198 58.4 91.9098 58.4H64.9998V29.8H90.6098C93.0798 29.8 95.1598 31.88 95.1598 34.35C95.1598 36.69 93.2098 38.77 90.9998 38.9C95.1599 38.9 97.7598 39.42 100.1 40.07C101.01 38.38 101.66 36.43 101.66 34.35C101.66 28.24 96.7198 23.3 90.6098 23.3H58.4998V100Z" fill="white"/>
        <path d="M16.0898 85H23.4998L33.5098 65.5H64.1898L45.2098 28.58L16.0898 85ZM36.7598 59L45.2098 42.75L53.5298 59H36.7598Z" fill="white"/>
        </svg>
</div>
<h1 style="text-align:center; display:block;">Opps, nothing here. Return to the <a href="<?php echo get_home_url(); ?>" style="text-decoration:none; color:#05239E;">Homepage</a>.  </h1>

</div>



<?php get_footer(); ?>