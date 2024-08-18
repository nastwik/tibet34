<?php

// Создание постов Проектыов
add_action( 'init', 'register_post_technique' );
function register_post_technique(){
    
	register_post_type( 'technique', [
        'labels' => [
            'name'               => 'Техника', // основное название для типа записи
            'singular_name'      => 'Машина', // название для одной записи этого типа
            'add_new'            => 'Добавить машину', // для добавления новой записи
            'add_new_item'       => 'Добавление машины', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование машины', // для редактирования типа записи
            'new_item'           => 'Новая машина', // текст новой записи
            'view_item'          => 'Смотреть машину', // для просмотра записи этого типа.
            'search_items'       => 'Искать машину', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Техника', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-car',
        'supports'            => [ 'title', 'editor', 'thumbnail', ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true,
    ]);

}