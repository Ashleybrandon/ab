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
            <h1>single</h1>
            <?php 

            the_content();

            ?>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">

    </div>
</div>
<?php get_footer(); ?>