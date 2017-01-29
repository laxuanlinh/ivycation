<?php 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//add category to page
function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );

//add thumbnails to post
add_theme_support( 'post-thumbnails' ); 

function sidebar_khoa_hoc_init() {

	register_sidebar( array(
		'name'          => 'Sidebar khóa học',
		'id'            => 'khoa_hoc',
	));

  register_sidebar( array(
    'name'          => 'Sidebar thông tin khóa học',
    'id'            => 'thong_tin_khoa_hoc',
  ));

  register_sidebar( array(
    'name'          => 'Sidebar tin tức & sự kiện',
    'id'            => 'tin-tuc',
  ));

  register_sidebar( array(
    'name'          => 'Sidebar thành tích',
    'id'            => 'thanh-tich',
  ));

  register_sidebar( array(
    'name'          => 'Sidebar học viên tiêu biểu',
    'id'            => 'hoc-vien',
  ));

}
add_action( 'widgets_init', 'sidebar_khoa_hoc_init' );

//register template for posts in categories
function get_custom_cat_template($single_template) {
   global $post;
   $cat = get_the_category($post->ID);
   $parent = get_category(get_top_parent_category($cat[0]->cat_ID));
   if ($parent->slug=="khoa-hoc") {
      $single_template = dirname( __FILE__ ) . '/single-khoa-hoc.php';
   } else if ($parent->slug=="thanh-tich"){
      $single_template = dirname( __FILE__ ) . '/single-thanh-tich.php';
   } else if ($parent->slug=="tin-tuc-su-kien"){
      $single_template = dirname( __FILE__ ) . '/single-khoa-hoc.php';
   } else if ($parent->slug=="goc-chia-se"){
      $single_template = dirname( __FILE__ ) . '/single-thanh-tich.php';
   }
   return $single_template;
} 
function get_top_parent_category($cat_ID){
  while($cat_ID){
    $cat = get_category($cat_ID);
    $cat_ID = $cat->category_parent;
    $parent_ID = $cat->cat_ID;
  }
  return $parent_ID;
}
add_filter( "single_template", "get_custom_cat_template" ) ;

// function register_page_template(){
//   global $post;
//   if (is_page()) {
//     $parent_ID = get_top_parent_page($post);
//     $parent = get_post($parent_ID);
//     if ($parent->slug == 'khoa-hoc') {
//       $template = dirname( __FILE__ ) . '/template-khoa-hoc.php';
//       load_template($template);
//     } else if ($parent->slug == 'thanh-tich') {
//       $template = dirname( __FILE__ ) . '/template-thanh-tich.php';
//       load_template($template);
//     } 
//   }
// }
// function get_top_parent_page($page){
//   if( is_page() ) {
//     $parents = get_post_ancestors( $post->ID );
//     $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
//   }
//   return $id;
// }
// add_action("template_redirect", "register_page_template");
?>