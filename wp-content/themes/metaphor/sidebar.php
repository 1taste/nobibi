<div id="cont-right">
    <form action="<?php echo home_url('/');?>" method="get" id="searchForm">
        <input type="text" placeholder="查找文章" name="s" id="search" >
        <span id="search-dec"></span>
    </form>
    <div id="blog-class">
        <div id="class-title"></div>
        <ul id="class-ul">
            <?php
                $categories = get_categories( array (
                    'hide_empty'   => 0
                ));
                foreach($categories as $category) {
                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'('.$category->count.')</a></li>';
                }
            ?>
        </ul>
    </div>
</div>
<script>
    $('#search-dec').click(function () {
        document.getElementById('searchForm').submit();
    });
</script>
