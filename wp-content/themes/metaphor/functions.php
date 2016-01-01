<?php

show_admin_bar(false);
remove_action('wp_head', 'wp_generator' ); //去除版本信息
remove_action('wp_head', 'wlwmanifest_link' );
remove_action('wp_head', 'rsd_link' );//清除离线编辑器接口
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//清除前后文信息
remove_action('wp_head', 'feed_links',2 );
remove_action('wp_head', 'feed_links_extra',3 );//清除feed信息
remove_action('wp_head', 'wp_shortlink_wp_head',10,0 );

//注册菜单
register_nav_menus( array(
'top-menu' => 'nobibi top menu'
));

// 添加特色图像功能
add_theme_support('post-thumbnails');

//set_post_thumbnail_size(700, 300, true);

//统计文章访问
function record_visitors(){
    if (is_singular()){
        global $post;
        $post_ID = $post->ID;
        if($post_ID){
            $post_views = (int)get_post_meta($post_ID, 'views', true);
            if(!update_post_meta($post_ID, 'views', ($post_views+1))) {
                add_post_meta($post_ID, 'views', 1, true);
            }
        }
    }
}
add_action('wp_head', 'record_visitors');

//取得文章的阅读次数
function post_views($echo = 1){
    global $post;
    $post_ID = $post->ID;
    $views = (int)get_post_meta($post_ID, 'views', true);
    if ($echo) echo number_format($views);
    else return $views;
}

// 设置摘要长度
function wpdocs_custom_excerpt_length( $length ) {
    return 140;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// 移除评论所需的url字段
add_filter('comment_form_default_fields', 'comments_remove_url');

function comments_remove_url($arg) {
    $arg['url'] = '';
    return $arg;
}

function comments_theme ($comment, $args, $depth) {
    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
<<?php echo $tag; ?> <?php comment_class( $comment->has_children ? 'parent' : '' ); ?> id="comment-<?php comment_ID(); ?>">
<?php if ( 'div' != $args['style'] ) : ?>
<div id="div-comment-<?php comment_ID(); ?>" class="comment-body clearfix">
    <?php endif; ?>
    <div class="comment-author-avatar"></div>
    <div class="comment-content-wrap">

        <?php printf( __( '<span class="fn">%s:</span>' ), get_comment_author_link() ); ?>
        <span>
            <?php echo $comment->comment_content ?>
            <?php
		comment_reply_link( array_merge( $args, array(
			'add_below' => $add_below,
            'depth'     => $depth,
            'max_depth' => $args['max_depth'],
            'before'    => '<span class="reply">',
        'after'     => '</span>'
            ) ) );
            ?>
        </span>
        <div class="comment-date">
            <?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), '&nbsp;&nbsp;', '' );
			?>
        </div>

    <?php if ( '0' == $comment->comment_approved ) : ?>
    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ) ?></em>
    <br />
    <?php endif; ?>



    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif; ?>
<?php
}
?>