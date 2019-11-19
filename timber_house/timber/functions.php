<?php
add_action( 'wp_enqueue_scripts', 'tymber_style' );
add_action( 'wp_enqueue_scripts', 'tymber_scripts' );

function tymber_style() {
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function tymber_scripts() {
    // wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
    // wp_enqueue_script( 'jquery' );

    // wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(jquery), null, true );
    // после подключения плагина для галереи jquery и magnific здесь не нужны
}

// создаем произвольный тип записи в КОНСОЛИ WP
add_action( 'init', function (){
    add_theme_support('post-thumbnails'); // активируем миниатюры

    register_post_type('faq', [
        'label'  => null,
        'labels' => array(
            'name'               => 'ЧАВО', // основное название для типа записи
            'singular_name'      => 'Вопрос-ответ', // название для одной записи этого типа
            'add_new'            => 'Добавить ответ', // для добавления новой записи
            'add_new_item'       => 'Добавление ответа', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ответа', // для редактирования типа записи
            'new_item'           => 'Новое ответ', // текст новой записи
            'view_item'          => 'Смотреть ответ', // для просмотра записи этого типа.
            'search_items'       => 'Искать ответ', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'ЧАВО', // название меню
        ),
        // 'description'         => '',
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        // 'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        // 'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        // 'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons sticky',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        // 'taxonomies'          => [],
        // 'has_archive'         => false,
        // 'rewrite'             => true,
        // 'query_var'           => true,
        'public'              => false,
        'show_ui'             => true, // зависит от public: в данной комбинации страницы не создаются, но в админке контент добавляется
    ] );
});

function getFaq(){
    $args = array(
    // 'numberposts' => 5,
    // 'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'ASC',
    // 'include'     => array(),
    // 'exclude'     => array(),
    // 'meta_key'    => '',
    // 'meta_value'  =>'',
    'post_type'   => 'faq',
    // 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);

    // вывод кастомных полей для условного типа записи reviews (соответственно в getReviews();)
    $reviews = [];
    foreach(get_posts($args) as $post) {
        $review = get_fields($post->ID);
        $review['name'] = $post->post_title;
        $review['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
        $reviews[] = $review;
    }
    return $reviews;
}






 ?>
