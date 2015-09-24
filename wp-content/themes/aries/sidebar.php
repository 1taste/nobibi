<div id="cont-right">
    <div id="search">
        <input type="text" placeholder="查找文章">
        <span id="search-dec"></span>
    </div>
    <div id="blog-class">
        <div id="class-title"></div>
        <ul id="class-ul">
            <?php
                $categories = get_categories( array (
                    'hide_empty'   => 0
                ));
                foreach($categories as $category) {
                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div>

