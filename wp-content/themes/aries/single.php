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

<div class="middle">
    <div id="cont-left">
        <?php if(have_posts()) : the_post();?>
        <div class="blog">
            <div class="p-title">
                <p class="p-title-text"><?php the_title();?></p>
                <p class="sp-title-info">
                    <span><?php the_author()?>&nbsp;</span>
                    <span>
                        <?php
                             the_date();
                             echo '&nbsp;';
                             the_time();
                        ?>
                    </span>
                </p>
            </div>
            <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
            <div class="p-text">
                <?php the_content();?>
            </div>
            <div class="p-updown">
                <span class="p-up">
                    <?php previous_post_link('上一篇：&nbsp;%link');?>
                </span>
                <span class="p-down">
                    <?php next_post_link('下一篇：&nbsp;%link');?>
                </span>
            </div>
            <?php
                $withcomments = "1";
                comments_template(); // 调用wp-comments.php 模板
            ?>
        </div>
        <?php endif;?>
    </div>
   <?php get_sidebar();?>
</div>