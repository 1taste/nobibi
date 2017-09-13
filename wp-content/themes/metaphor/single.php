<!DOCTYPE html>
<html>
<head>
    <?php
    get_header();
?>
 <link  href="<?php bloginfo('template_url')?>/plugin/prism/prism.css" rel="stylesheet">
 <script src="<?php bloginfo('template_url')?>/plugin/prism/prism.js"></script>
<style>
    body {
        position: absolute;
    }
    #toc_container {
        display: none;
    }
    @media screen and (min-width: 1600px) {
        #toc_container {
            position: absolute;
            left: -200px;
            top: 160px;
            display: table;
            z-index: 999;
        }

    }
</style>

</head>
<body>
<?php
    get_template_part('nav');
?>
<?php if(have_posts()) : the_post();?>
<div class="article-bg mask" style="background-image: url(<?php if (has_post_thumbnail()) { echo  wp_get_attachment_url(get_post_thumbnail_id($post->ID));}?>)">
    <div class="article-bg-meta">
        <h3><?php the_title();?></h3>
        <span>Published by </span>
        <span class="article-author"><?php the_author()?></span>
        <span>on</span>
        <span class="article-date"><?php the_date();?></span>
    </div>
</div>
<article>
    <div class="content">

            <div class="crumbs">Nobibi > <?php $cat = get_the_category(); echo $cat[0]->cat_name?> > <?php the_title();?></div>
           <!-- <div class="article-title">
                <h3><?php the_title();?></h3>
                <p class="article-title-info">
                    <span><?php the_author()?>&nbsp;&nbsp;</span>
                    <span>
                        <?php
                             the_date();
                        ?>
                    </span>
                </p>
            </div>-->
            <!--<?php if (has_post_thumbnail()) {the_post_thumbnail(array(968,550));}?>-->
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


    </div>
</article>
<?php endif;?>
<script>
    $(function () {
        /****************文章目录锚点****************/

        var $toc = $('#toc_container');
        window.onscroll = function () {

            var offsetTop = $toc.offset().top - $(document).scrollTop();
            if (offsetTop <= 20) {
                $toc.css({
                    "position": "fixed",
                    "top":"20px",
                    "left": $toc.offset().left+"px"
                });
            }  else {
                
            }

        }
    });

</script>

<?php get_footer();?>