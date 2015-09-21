<?php
/*
Template Name:blog
*/
?>

<div class="top">
    <div id="top-bg"></div>
    <div id="top-info">
        <div id="logo"></div>
        <ul id="nav">
            <li>
                <a href="<?php bloginfo('url')?>" id="nav-one"></a>
                <span class="selected"></span>
            </li>
            <li>
                <a href="<?php bloginfo('template_url')?>/content.php" id="nav-two"></a>
                <span></span>
            </li>
            <li>
                <a href="<?php bloginfo('url')?>" id="nav-three"></a>
                <span></span>
            </li>
        </ul>
    </div>
</div>