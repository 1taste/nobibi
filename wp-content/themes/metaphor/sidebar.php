<div id="cont-right">
    <div class="search-box">
    <form action="<?php echo home_url('/');?>" method="get" id="searchForm">
        <input type="text" placeholder="Search..." name="s" id="search" >
        <span id="search-btn"></span>
        <span class="search-trans"></span>
    </form>
    </div>
    <div id="blog-class">
        <div id="class-title">Categories</div>
        <ul id="class-ul">
            <?php
                $categories = get_categories( array (
                    'hide_empty'   => 0
                ));
                foreach($categories as $category) {
                    echo '<li><a href="'.get_category_link($category->term_id).'"><i class="iconfont icon-angle-right"></i>'.$category->name.'('.$category->count.')</a></li>';
                }
            ?>
        </ul>
    </div>
</div>
<script>
    $('#search-btn').click(function () {
        document.getElementById('searchForm').submit();
    });
</script>
