<?php 
/*
* home.php
*
* Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div class="left-contact-icons">
    <small>lorem</small>
</div>

<header class="home-header">
    <div class="header-text">
        <h1>lorem Ipsum</h1>
    </div>
    <div class="geo-pattern">
        <x-graph numbers="30"></x-graph>
    </div>
</header>
<section class="home-about">
    <div class="section-inner row">
        <div class="about-text col-6">
            <h3>Dolor Sit Amet</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, nisi illum perspiciatis saepe officiis dolorem et illo necessitatibus ipsum dicta eveniet animi? Quaerat fugiat numquam illo consequuntur architecto officiis obcaecati.</p>
        </div>
        <div class="about-image col-6">
            <img src="<?php echo IMAGES ?>/paper-crown.jpeg" alt="ashley brandon">
        </div>
    </div>
</section>
<section class="selected-work">
    <div class="section-inner">
        <div class="item-1">
            <div class="block-1"></div>
            <div class="block-2"></div>
        </div>
        <div class="item-2">
            <div class="block-1"></div>
            <div class="block-2"></div>
        </div>
        <div class="item-3">
            <div class="block-1"></div>
            <div class="block-2"></div>
        </div>
    </div>
</section>



<?php get_footer(); ?>