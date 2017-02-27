<?php
/*
Template Name:nav
*/
?>

<header id="header">
    <div class="header-main">
        <div id="logo">NOBIBI</div>
        <ul id="nav">

            <?php
                $items = wp_get_nav_menu_items('top-menu', array());
                foreach($items as $key => $item) {
                    echo '<li><a  href="'.$item->url.'" id="nav-'.$item->attr_title.'">'.$item->title.'</a></li>';
                }
            ?>
        </ul>
    </div>
</header>
