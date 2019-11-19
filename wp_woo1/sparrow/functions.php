<?php
// add_action($tag, $function_to_add, $priority = 10 , $accepted_args = 1)
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');
add_filter('document_title_separator', 'my_sep');
function my_sep($sep) {
    $sep = ' % ';
    return $sep;
}
add_filter('the_content', 'test_content');
function test_content ($content) {
  $content.= 'Спасибо за прочтение сатьи!';
   return $content;
}
add_action( 'init', 'register_post_types' );
function register_post_types(){
  register_post_type('portfolio', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Портфолио', // основное название для типа записи
      'singular_name'      => '1Портфолио', // название для одной записи этого типа
      'add_new'            => 'Добавить работу', // для добавления новой записи
      'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование работы', // для редактирования типа записи
      'new_item'           => 'Новая работа', // текст новой записи
      'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
      'search_items'       => 'Искать работу в портфолио', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Портфолио', // название меню
    ),
    'description'         => 'Это наши работы в портфолио',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => false, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-format-gallery',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title','editor','author', 'thumbnail', 'post-formats', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );
}
add_action('init', 'create_taxonomy');
function create_taxonomy(){
  register_taxonomy('skills', array('portfolio'), array(
    'label'                 => '', // определяется параметром ->name
    'labels'                => array(
      'name'              => 'Навыки',
      'singular_name'     => 'Навык',
      'search_items'      => 'Найти навык',
      'all_items'         => 'Все навыки',
      'view_item '        => 'Смотреть навыки',
      'parent_item'       => 'Родительский навык',
      'parent_item_colon' => 'Родительский Навык:',
      'edit_item'         => 'Изменить навык',
      'update_item'       => 'Обновить навык',
      'add_new_item'      => 'Добавить новый навык',
      'new_item_name'     => 'Новое имя навыка',
      'menu_name'         => 'Навыки',
    ),
    'description'           => 'Навыки, примененные при работе над проектом', // описание таксономии
    'public'                => true,
    'publicly_queryable'    => null, // равен аргументу public
    'hierarchical'          => false,
    'update_count_callback' => '',
    'rewrite'               => true,
  ) );
}
add_action( 'init', 'skills_for_portfolio' );
function skills_for_portfolio(){
  register_taxonomy_for_object_type( 'skills', 'portfolio');
}
function register_my_widgets(){
  register_sidebar( array(
    'name'          => 'Left Sidebar',
    'id'            => "left_sidebar",
    'description'   => 'Правый сайдбар',
    'class'         => '',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ) );
  register_sidebar( array(
    'name'          => 'Top Sidebar',
    'id'            => "top_sidebar",
    'description'   => 'Верхний сайдбар',
    'class'         => '',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ) );
}

function theme_register_nav_menu() {
  register_nav_menu('top', 'меню в шапке');
  register_nav_menu('footer', 'меню в подвале');
  add_theme_support( 'post-formats', array( 'aside', 'video' ) );
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'portfolio'));
  add_image_size('post_thumb', 1300, 500, true);
  add_filter( 'excerpt_more', 'new_excerpt_more' );
  function new_excerpt_more( $more ){
  global $post;
  return '<a href="'. get_permalink($post) . '"><br>Читать дальше...</a>';
  }
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
  /*
  Вид базового шаблона:
  <nav class="navigation %1$s" role="navigation">
      <h2 class="screen-reader-text">%2$s</h2>
      <div class="nav-links">%3$s</div>
  </nav>
  */
  return '<nav class="navigation %1$s" role="navigation">
            <div class="nav-links">%3$s</div>
          </nav>';
  }
  // выводим пагинацию
  the_posts_pagination( array('end_size' => 2,));
  //Убираем заголовок пагинации
}

function style_theme() {
    // echo "Подключаем стили";
    // wp_enqueue_style($handle, $src, $deps, $ver, $media);
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('WhatTheFuck', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media', get_template_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style('woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css');
}

function scripts_theme() {
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
    wp_enqueue_script('jquery-migrate-1.2.1', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');



}
add_filter('script_loader_tag', 'remove_type_attr', 10, 2);
function remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
// all the WordPress plugins and themes have to do that so we can’t fall in the problem to add the function in all of them manually

// Регистрируем свой хук- action (вызов по do_action())
add_action ('my_action', 'action_function');
function action_function() {
  echo " Мое действие по самописному хуку ";
}
// а теперь шоткод (вставка в редакторе текста [my_short])
add_shortcode ('my_short', 'short_function');
function short_function() {
  return " Мое действие по shortcode ";
}

function iframe( $atts ) {
  $atts = shortcode_atts( array(
    'href'   => 'http://vk.com',
    'height' => '550px',
    'width'  => '600px',
  ), $atts );

  return '<iframe src="'. $atts['href'] .'" width="'. $atts['width'] .'" height="'. $atts['height'] .'"> <p>Your Browser does not support Iframes.</p></iframe>';
}
add_shortcode('iframe', 'iframe');
// использование: [iframe href="http://youtube.com" height="480px" width="640px"]

//поддержка woocommerce
//To check if woocommerce or anyother plguin is active, paste the following code on the template where you want to display the message.
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
}

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
  // Change the breadcrumb delimeter from '/' to '>'
  $defaults['delimiter'] = ' &nbsp;&rsaquo;&nbsp; ';
  return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter', 20 );

add_action('woocommerce_before_main_content', 'remove_sidebar');
function remove_sidebar() {
  if (is_shop()) {
    remove_action('woocomerce_sidebar', 'woocommerce_get_sidebar', 10);
  }
}

// link
  remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close ', 5 );
  add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close ', 10 );



?>
