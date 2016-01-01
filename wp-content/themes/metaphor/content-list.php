<?php
/*
Template Name:content-list
*/
?>

<li>
    <?php if (has_post_thumbnail()) {the_post_thumbnail(array(700,430));}?>
    <div class="p-title">
        <p class="p-title-text"><a href="<?php echo get_the_permalink()?>"><?php the_title()?></a></p>
        <p class="p-title-info">
            <span>
                <i class="iconfont icon-history"></i>
                <?php
                 the_date();?>
            </span>
            <span>
                <i class="iconfont icon-user"></i>
                <?php
                 the_author();?>
            </span>
            <span>
                <i class="iconfont icon-file-open"></i>
                <?php $cat = get_the_category(); echo $cat[0]->cat_name?>
            </span>
            <span>
                <i class="iconfont icon-sms"></i>
                <?php echo $post->comment_count ?>
            </span>

        </p>
    </div>


    <div class="p-ahead">
        <?php the_excerpt();?>
    </div>

    <div class="p-action">
        <a href="<?php echo get_permalink()?>">继续阅读</a>
    </div>
</li>