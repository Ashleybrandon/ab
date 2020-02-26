<?php get_header(); ?>

<div class="container">
    <div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-4 post-feed">
            <?php the_post_thumbnail();?> <br>
           <p><?php the_title(); ?>></p> <br>
        </div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>