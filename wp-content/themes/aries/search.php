<?php
/*
Template Name:search
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
        <div style="overflow: hidden;margin: 15px 0">
            <div style="float: left;">SEARCH/<?php echo $_GET['s']?></div>
            <div style="float: right;">
                <?php
                    global $wp_query;
                    echo $wp_query->found_posts . ' 条记录';
                ?>
            </div>
        </div>
        <ul id="blog-list">
            <?php
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
