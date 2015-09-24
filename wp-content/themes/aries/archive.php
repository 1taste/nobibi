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
            if ( have_posts() ):
                while ( have_posts() ) : the_post();
                    get_template_part('content', 'list');
                endwhile;
            endif;
         ?>
        </ul>
        <div id="more-wrap">
            <a id="more">浏览更多...</a>
        </div>
    </div>
    <?php get_sidebar()?>
</div>
<?php get_footer();?>
</body>
