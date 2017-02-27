<?php
/*
Template Name:content-list
*/
?>

<li>
    <?php if (has_post_thumbnail()) {the_post_thumbnail(array(700,467));}?>
    <div class="p-title">

        <p class="p-title-text"><a href="<?php echo get_the_permalink()?>"><?php the_title()?></a></p>
        <p class="p-title-info">
            <span>
                <i class="iconfont icon-history"></i>
                <?php
                 the_time('m-d,Y');?>
            </span>
            <span>
                <i class="iconfont icon-user"></i>
                BY
                <?php
                 the_author();?>
            </span>
            <span>
                <i class="iconfont icon-tag"></i>
                <?php $cat = get_the_category(); echo $cat[0]->cat_name?>
            </span>

            <a href="<?php echo get_the_permalink()?>#comments">
                <i class="iconfont icon-sms"></i>
                <?php echo $post->comment_count ?>
            </a>

        </p>
    </div>


    <div class="p-ahead">
        <?php the_excerpt();?>
    </div>

    <div class="p-action">
        <a href="<?php echo get_permalink()?>">READ MORE</a>
    </div>
</li>