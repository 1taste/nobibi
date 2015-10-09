<?php
/*
Template Name:nav
*/
?>

<div class="top">
    <div id="top-bg"></div>
    <div id="top-info">
        <div id="logo"></div>
        <ul id="nav">

            <?php
                $items = wp_get_nav_menu_items('top-menu', array());
                foreach($items as $key => $item) {
                    echo '<li><a class="wave wave-dark" href="'.$item->url.'" id="nav-'.$item->attr_title.'"></a></li>';
                }
            ?>
        </ul>
    </div>
</div>
