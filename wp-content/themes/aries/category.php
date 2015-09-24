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

                the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );
            endif;
         ?>
        </ul>

    </div>
    <?php get_sidebar()?>
</div>
<?php get_footer();?>
</body>
