<!DOCTYPE html>
<html id="page-home">
<head>
<?php
    get_header();
?>
<style>
    html, body {
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-image: url("<?php bloginfo('template_url')?>/images/nobibi-bg2.jpg");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;

    }
    .index-meta {
        position: absolute;
        z-index: 99;
        left: 50%;
        top: 50%;
        margin-left: -300px;
        margin-top: -100px;
        width: 700px;
        height: 200px;
        color: rgba(255,255,255,.9);
        text-align: center;

    }
    .index-meta h3 {
        font-size: 64px;
        word-spacing: 16px;
    }
    .index-meta span {
        font-size: 20px;
        color: #eee;
        word-spacing: 2px;
    }
    .index-meta a {
        opacity: .9;
        margin: 0 auto;
        margin-top: 32px;
        display: block;
        width: 110px;
        line-height: 36px;
        padding: 0 32px;
        border: 2px solid #fff;
        color: #fff;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        background-color: rgba(255,255,255,.1);
    }
    .index-meta a:hover {
        background: #7049BA;
        border-color: #7049BA;
        transition: all .2s ease-out;
        opacity: 1;
    }
</style>
</head>
<body class="mask">
<?php get_template_part('nav')?>
<div class="index-meta">
    <h3>HONE OUR SKILLS</h3>
    <span>Art is long, but life is short.</span>
    <a href="<?php echo get_permalink(22)?>">SEE MORE</a>
</div>
</body>
</html>