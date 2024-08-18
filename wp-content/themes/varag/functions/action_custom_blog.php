<?php

// Создание постов Проектыов
add_action( 'init', 'register_post_blog' );
function register_post_blog(){
    
	register_post_type( 'blog', [
        'labels' => [
            'name'               => 'Блог', // основное название для типа записи
            'singular_name'      => 'Статья', // название для одной записи этого типа
            'add_new'            => 'Добавить статью', // для добавления новой записи
            'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
            'new_item'           => 'Новая статья', // текст новой записи
            'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
            'search_items'       => 'Искать статью', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Блог', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => [ 'title', 'editor', 'thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true,
    ]);

}