<?php 
/*
*
* Template Name: Blog
*
*/

get_header(); ?>

<div class="container">

<?php get_template_part( 'layouts/ajax-search', 'page' ); ?>
    
    <?php 
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => 10
    );
    $the_query = new WP_Query( $args );
    
    // The Loop
    if ( $the_query->have_posts() ) {
        echo '<div class="row">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            echo '<div class="col-4 post-feed">';
            echo  the_post_thumbnail();
            echo '<p>' . get_the_title() . '</p>';
            echo '</div>';
        }
        
        echo '</div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
        
    ?>
    
</div>


<?php get_footer(); ?>