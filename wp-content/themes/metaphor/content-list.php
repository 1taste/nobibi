<?php
/*
Template Name:content-list
*/
?>

<li>
    <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
    <div class="p-title">
        <p class="p-title-text"><span><?php the_title()?></span></p>
        <p class="p-title-info">
            <span><?php the_author()?>&nbsp;发表于</span>
            <span>
                <?php
                 the_date();
                 echo '&nbsp;';
                 the_time();
                ?>
            </span>
        </p>
    </div>


    <div class="p-ahead">
        <?php the_excerpt();?>
    </div>

    <div class="p-action">
        <a href="<?php echo get_permalink()?>" class="btn btn-large btn-primary wave">继续阅读</a>
        <span><i class="iconfont icon-yulan"></i><?php post_views();?>&nbsp;&nbsp;<i class="iconfont icon-pinglun"></i><?php echo $post->comment_count ?></span>
    </div>
</li>