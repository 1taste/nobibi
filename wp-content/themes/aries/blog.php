<?php
/*
Template Name:blog
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
        <ul id="blog-list">
            <?php
            if ( have_posts() ):
                while ( have_posts() ) : the_post();
                    echo 1;
                    get_template_part('content', 'list');
                endwhile;
            endif;
         ?>
        </ul>
        <div id="more-wrap">
            <a id="more">浏览更多...</a>
        </div>
    </div>
    <div id="cont-right">
        <div id="search">
            <input type="text" placeholder="查找文章">
            <span id="search-dec"></span>
        </div>
        <div id="blog-class">
            <div id="class-title"></div>
            <ul id="class-ul">
                <li><a>ALL</a></li>
                <li><a>大数据</a></li>
                <li><a>AI</a></li>
                <li><a>前端</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    <span>京ICP备15023006号</span>
</div>
</body>
