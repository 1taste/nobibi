<title>nobibi</title>
<meta charset="utf-8"/>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href="<?php bloginfo('template_url')?>/style/reset.css" rel="stylesheet">
<link href="<?php bloginfo('template_url')?>/style/common.css" rel="stylesheet">
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>






<!--<?php
    if (have_posts()):
        while(have_posts()):
            the_post();
            the_title();
            the_content();
            the_date();
            the_time();
        endwhile;
    endif;
?>

<p>分类列表</p>
<?php
    $args = array(
        'show_count'=>1, //显示文章数量
        'hide_empty'=>0,  //是否隐藏没有文章的分类
        'use_desc_for_title'=>1
    );

    //输出所有分类
    wp_list_categories($args);
?>


---------------------------------------

<?php
    $arg = array(
       'category'=>1
    );

    $posts = get_posts($arg);

?>
<?php

?>-->
