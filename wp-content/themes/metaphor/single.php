<!DOCTYPE html>
<html>
<head>
    <?php
    get_header();
?>
<link href="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/styles/shCore.css" rel="stylesheet">
<link href="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/styles/shThemeEclipse.css" rel="stylesheet">
<script src="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/scripts/shCore.js"></script>
<script src="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script src="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script src="<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/scripts/shBrushCss.js"></script>
<style>
    body {
        position: absolute;
    }
</style>
<script>
    SyntaxHighlighter.config.clipboardSwf = '<?php bloginfo('template_url')?>/plugin/syntaxhighlighter/scripts/clipboard.swf';
    SyntaxHighlighter.defaults.gutter = false;
    SyntaxHighlighter.config.strings = {
        expandSource : '展开代码',
        viewSource : null,
        copyToClipboard : '复制代码',
        copyToClipboardConfirmation : '复制好了',
        print : null,
        help: null,
        alert: '',
        noBrush: '不能找到刷子: ',
        brushNotHtmlScript: '刷子没有配置html-script选项',
        aboutDialog: '<div></div>'
    };
    SyntaxHighlighter.all();
</script>
</head>
<body>
<?php
    get_template_part('nav');
?>
<?php if(have_posts()) : the_post();?>
<div class="article-bg mask" style="background-image: url(<?php if (has_post_thumbnail()) { echo  wp_get_attachment_url(get_post_thumbnail_id($post->ID));}?>)">
    <div class="article-bg-meta">
        <h3><?php the_title();?></h3>
        <span>Published by <?php the_author()?>&nbsp;&nbsp;On</span>
        <span><?php the_date();?></span>
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
<?php get_footer();?>