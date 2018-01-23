<?php
//Do not remove this
load_template( get_template_directory() . '/functions/init-core.php' );

/**
* The best and safest way to extend the Humean WordPress theme with your own custom code is to create a child theme.
* You can add temporary code snippets and hacks to the current functions.php file, but unlike with a child theme, they will be lost on upgrade.
*
* If you don't know what a child theme is, you really want to spend 5 minutes learning how to use child themes in WordPress, you won't regret it :) !
* https://codex.wordpress.org/Child_Themes
*
*/

/*首行缩进*/
function Bing_text_indent($text){
	$return = str_replace('<p', '<p style="text-indent:2em;"',$text);
	return $return;
}
add_filter('the_content','Bing_text_indent');

/*特色图片*/
/*
*function get_post_thumbnail_url($post_id){
*$post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
*$thumbnail_id = get_post_thumbnail_id($post->ID);
*if($thumbnail_id ){
*$thumb = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
*return $thumb[0];
*   }else{
*return false;
*  }
*}
*/

/*分页符*/
add_filter( 'mce_buttons', 'cmp_add_page_break_button', 1, 2 );
function cmp_add_page_break_button( $buttons, $id ){
    if ( 'content' != $id )
        return $buttons;
    array_splice( $buttons, 13, 0, 'wp_page' );
    return $buttons;
}

//禁用文章自动保存
add_action('wp_print_scripts','disable_autosave');
function disable_autosave(){
	wp_deregister_script('autosave');
}
 
//禁用文章修订版本
add_filter( 'wp_revisions_to_keep', 'specs_wp_revisions_to_keep', 10, 2 );
function specs_wp_revisions_to_keep( $num, $post ) {
return 0;
}

// 同时删除head和feed中的WP版本号
function ludou_remove_wp_version() {
  return '';
}
add_filter('the_generator', 'ludou_remove_wp_version');

// 隐藏js/css附加的WP版本号
function ludou_remove_wp_version_strings( $src ) {
  global $wp_version;
  parse_str(parse_url($src, PHP_URL_QUERY), $query);
  if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
    // 用WP版本号 + 12.8来替代js/css附加的版本号
    // 既隐藏了WordPress版本号，也不会影响缓存
    // 建议把下面的 12.8 替换成其他数字，以免被别人猜出
    $src = str_replace($wp_version, $wp_version + 12.8, $src);
  }
  return $src;
}
add_filter( 'script_loader_src', 'ludou_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'ludou_remove_wp_version_strings' );

//搜索结果排除特定 ID 的文章或页面
function Bing_search_filter_id($query) {
 if ( !$query->is_admin && $query->is_search) {
 $query->set('post__not_in', array(2611,2612,2613,2626,2598,2544,2597,2543,2527,2531,2526,2462,2458,2451,2430,2429,2336,2331,2329,2328));//文章或者页面的ID
 }
 return $query;
}
add_filter('pre_get_posts','Bing_search_filter_id');