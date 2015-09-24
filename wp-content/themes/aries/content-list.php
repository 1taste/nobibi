<?php
/*
Template Name:content-list
*/
?>

<li>
    <div class="p-title">
        <p class="p-title-text"><?php the_title()?></p>
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
    <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>

    <p class="p-ahead">
        <?php the_excerpt();?>
    </p>

    <div class="p-go">
        <a href="<?php echo get_permalink()?>">继续阅读</a>
        <span>浏览数<?php post_views();?>|评论数<?php echo $post->comment_count ?></span>
    </div>
</li>