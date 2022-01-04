
<?php
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function custom_pagination_html( $template ) {
    $template = '
    <nav class="pagination" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        %3$s
    </nav>';
    return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // 制作実績
    if($query->is_archive('works')) {
        $query->set('posts_per_page', '9');
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
