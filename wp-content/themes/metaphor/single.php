<!DOCTYPE html>
<html>
<head>
    <?php
    get_header();
?>
</head>
<body>
<?php
    get_template_part('nav');
?>
<div class="article-bg"></div>
<article>
    <div class="content">
        <?php if(have_posts()) : the_post();?>
            <div class="crumbs">Nobibi > <?php $cat = get_the_category(); echo $cat[0]->cat_name?> > <?php the_title();?></div>
            <div class="article-title">
                <h3><?php the_title();?></h3>
                <p class="article-title-info">
                    <span><?php the_author()?>&nbsp;&nbsp;</span>
                    <span>
                        <?php
                             the_date();
                        ?>
                    </span>
                </p>
            </div>
            <?php if (has_post_thumbnail()) {the_post_thumbnail(array(968,550));}?>
            <div class="p-text">
                <?php the_content();?>
            </div>
            <div class="p-updown">
                <?php previous_post_link('上一篇：&nbsp;%link');?>
                <br>
                <?php next_post_link('下一篇：&nbsp;%link');?>
            </div>
            <?php
                $withcomments = "1";
                comments_template(); // 调用wp-comments.php 模板
            ?>
        <?php endif;?>

    </div>
</article>
<?php get_footer();?>