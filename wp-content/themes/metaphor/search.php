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
        <div class="search-header clearfix">
            <div class="search-title"><span class="search-label">SEARCH</span><span class="search-sep">/</span><span class="search-keywords">"<?php echo $_GET['s']?>"</span></div>
            <div class="search-records">
                <?php
                    global $wp_query;
                    echo $wp_query->found_posts . ' 条记录';
                ?>
            </div>
        </div>
        <ul id="blog-list">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                    get_template_part('content', 'list');
                endwhile;

                the_posts_pagination( array(
				    'prev_text'          => 'Prev',
                    'next_text'          => 'Next'
                ) );
            } else {
                echo '<div class="search-empty">没有找到符合条件的结果!</div>';
            }
            ?>
        </ul>

    </div>
    <?php get_sidebar()?>
</div>
<?php get_footer();?>
</body>
