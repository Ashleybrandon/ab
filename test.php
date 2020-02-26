<?php
/*
* Template Name: Home Feed
*
* Displays paginated image feed, and company info on homepage

https://wordpress.stackexchange.com/questions/5664/breaking-the-loop
*/

?>


<?php  
    
    $args = array(
        'theme_location' => 'main-menu'
    );


    ?>

<?php get_header(); ?>

 <div class="container">
    <div class="row"> 
      <nav class="main-nav">
        <div class="row">
          <div class="col-3">
          
    <?php wp_nav_menu( $args ); ?>

          </div>
          <div class="col-3 header-logo-col">
            <div class="header-logo">
              <!-- SVG logo was here -->

            </div>
          </div>
        </div>
      </nav>
      <main>
        <section class="row">
        <div class="col-3 home-intro--text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi fugit iure necessitatibus ipsum molestiae deserunt odio numquam optio rerum facere, nam expedita sit vero aperiam hic quibusdam. Modi nam nesciunt aut inventore ex iusto et officiis laudantium pariatur voluptatibus, numquam alias nihil, impedit, debitis voluptatem doloremque necessitatibus! Quaerat, delectus nulla.</p>
        </div>
  <?php
  
  $loop = new WP_Query( 
    array( 
      'post_type' => 'post', 
      'posts_per_page' => 5,
      'paged'         => $paged,
    ) 
  );
 
  
  ?>      

        <?php
if( $loop->have_posts() ) :

    //$post_count = $loop->found_posts; // <-- think this is the total, corrected below
    $post_count = $loop->post_count; // should be the result count for the current page
    $loop_count = 0;

    while ( $loop->have_posts() ) : $loop->the_post(); 
        $loop_count++;
        ?>


<!-- your regular loop markup, eg. title, content, etc.. -->

<div class="col-3"> 
    <div data-paroller-factor="0.4" data-paroller-type="background" class="block--1 lazy" style=" height: 600px; background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>);" > 
    </div> 
  </div>
  
<div class="col-3"> 
    <div data-paroller-factor="0.4" data-paroller-type="background" class="block--2 lazy" style=" height: 600px; background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>);" > 
    </div> 
  </div>

<p>bla bla bla</p>
  <?php
        if( $post_count >= 2 && $loop_count == 2 ) : $loop_count++;
         while ( $loop->have_posts() ) : $loop->the_post(); 
        $loop_count++;
            ?>

  <div class="col-3 empty--block"></div>

<div class="col-3"> 
    <div data-paroller-factor="0.4" data-paroller-type="background" class="block--3 lazy" style=" height: 600px; background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>);" > 
    </div> 
  </div>

            <?php
            endwhile;
            endif;
    endwhile;
endif;
?>



<div class="col-6 page-nav">
<?php echo paginate_links( $args ) ?>
</div>
        </section>
      </main>
    </div>
  </div>


<?php get_footer(); ?>