<?php
/*
Template Name:blog
*/
?>
<!DOCTYPE html>
<html id="page-blog">
<head>
<?php
    get_header();
?>
</head>
<body>
<?php
    get_template_part('nav');
?>
<div class="middle">
    <div id="cont-left">
        <ul id="blog-list">
            <?php
            $pageNum = $_GET['paged'];
            query_posts( 'posts_per_page=5&paged='.$pageNum);
            if ( have_posts() ):
            while ( have_posts() ) : the_post();
            get_template_part('content', 'list');
            endwhile;

            the_posts_pagination( array(
            'prev_text'          => 'Prev',
            'next_text'          => 'Next'
            ) );
            endif;
         ?>
        </ul>

    </div>
    <?php get_sidebar()?>
</div>
<?php get_footer();?>
</body>
