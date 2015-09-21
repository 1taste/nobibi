<!DOCTYPE html>
<html>
<head>
<?php
    get_header();
?>
<style>
    html, body {
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-image: url("<?php bloginfo('template_url')?>/images/nobibi-bg.jpg");
        background-position: center center;
        background-repeat: no-repeat;
    }
</style>
</head>
<body>
<?php get_template_part('nav')?>

<?php
    wp_nav_menu(array('theme_location' => 'top-menu', 'menu_id' => 'topnav','container_class' => 'primary'));
?>

</body>
</html>