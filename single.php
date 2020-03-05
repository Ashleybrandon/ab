<?php 
/*
*
* Template name: Post Template
*
*/

?>

<?php get_header(); ?>
<header class="blog-post-header">
    <div class="container">
        <div class="row">
            <h1><?php get_the_title(); ?></h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-9">
    <?php
		while ( have_posts() ) : the_post();

        the_content( sprintf(
            /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gourmet-artistry' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
        ?>
        </div>
        <div class="col-3"> hulla col 3</div>
    </div>
</div>
<?php get_footer(); ?>