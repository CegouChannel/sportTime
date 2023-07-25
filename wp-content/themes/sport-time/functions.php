<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
add_action( 'init', 'register_post_slider' );
add_action( 'init', 'register_post_comment' );
add_action( 'init', 'register_post_test' );
add_action('wp_enqueue_scripts', 'themeslug_enqueue_style');
add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');
add_action( 'admin_head-nav-menus.php', 'register_my_meta_box_accordion_nav_menus' );
add_action('init', 'register_post_brend');

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function themeslug_enqueue_script()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('jqueryMigrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('templatemo', get_template_directory_uri() . '/assets/js/templatemo.js');
    wp_enqueue_script('templatemoMin', get_template_directory_uri() . '/assets/js/templatemo.min.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js');
}

function themeslug_enqueue_style()
{
    wp_enqueue_style('stylesSite', get_stylesheet_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('fontawesomemin', get_stylesheet_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_enqueue_style('slickTheme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slickThemeMin', get_stylesheet_directory_uri() . '/assets/css/slick-theme.min.css');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.min.css');
    wp_enqueue_style('templatemo', get_stylesheet_directory_uri() . '/assets/css/templatemo.css');
    wp_enqueue_style('templatemoMin', get_stylesheet_directory_uri() . '/assets/css/templatemo.min.css');
    wp_enqueue_style('global', get_stylesheet_directory_uri() . '/assets/css/global.css');
    
}


function register_post_slider()
{
    register_post_type('contentslider', [
        'label'  => 'slider',
        'labels' => [
            'name'               => 'слайдер', // основное название для типа записи
            'singular_name'      => 'слайдер', // название для одной записи этого типа
            'add_new'            => 'Добавить слайдер', // для добавления новой записи
            'add_new_item'       => 'Добавление слайдера', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование слайдера', // для редактирования типа записи
            'new_item'           => 'Новоый слайдер', // текст новой записи
            'view_item'          => 'Смотреть слайдер', // для просмотра записи этого типа.
            'search_items'       => 'Искать слайдер', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'слайдер', // название меню
        ],
        'description'            => 'Все слайдеры',
        'public'                 => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    add_theme_support( 'post-thumbnails', array( 'contentslider' ) ); 
}

function register_post_comment(){
    register_post_type('comment', [
        'label'  => 'slider',
        'labels' => [
            'name'               => 'комментарий', // основное название для типа записи
            'singular_name'      => 'комментарий', // название для одной записи этого типа
            'add_new'            => 'Добавить комментарий', // для добавления новой записи
            'add_new_item'       => 'Добавление комментария', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование комментария', // для редактирования типа записи
            'new_item'           => 'Новоый комментарий', // текст новой записи
            'view_item'          => 'Смотреть комментарий', // для просмотра записи этого типа.
            'search_items'       => 'Искать комментарий', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'комментарии', // название меню
        ],
        'description'            => 'Все комментарии',
        'public'                 => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true, 
    ]);
}

function register_post_brend()
{
    register_post_type('brends', [
        'label'  => 'brend',
        'labels' => [
            'name'               => 'бренд', // основное название для типа записи
            'singular_name'      => 'бренд', // название для одной записи этого типа
            'add_new'            => 'Добавить бренд', // для добавления новой записи
            'add_new_item'       => 'Добавление бренда', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование бренда', // для редактирования типа записи
            'new_item'           => 'Новоый бренд', // текст новой записи
            'view_item'          => 'Смотреть бренд', // для просмотра записи этого типа.
            'search_items'       => 'Искать бренд', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'бренд', // название меню
        ],
        'description'            => 'Все бренды',
        'public'                 => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    add_theme_support( 'post-thumbnails', array( 'contentslider' ) ); 
}


function register_post_test(){
    register_post_type('test', [
        'label'  => 'test',
        'labels' => [
            'name'               => 'тест', // основное название для типа записи
            'singular_name'      => 'тест', // название для одной записи этого типа
            'add_new'            => 'Добавить комментарий', // для добавления новой записи
            'add_new_item'       => 'Добавление комментария', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование комментария', // для редактирования типа записи
            'new_item'           => 'Новоый комментарий', // текст новой записи
            'view_item'          => 'Смотреть комментарий', // для просмотра записи этого типа.
            'search_items'       => 'Искать комментарий', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'тест', // название меню
        ],
        'description'            => 'Все комментарии',
        'public'                 => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true, 
    ]);
}


