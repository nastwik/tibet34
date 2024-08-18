<?php

// Просмотр массив в удобном виде
function dd($array) {
	echo '<style>';
	echo '.preloader {display: none;}';
	echo '</style>';
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	exit();
}

// // Скрываем ненужные разделы в админ панели
// add_action('admin_menu', 'remove_admin_menu');
// function remove_admin_menu() {	
// 	remove_menu_page('edit-comments.php'); // комментарии
// 	remove_menu_page('edit.php'); // записи
// }

// --------СКРИПТЫ И СТИЛИ--------

// версия стилей и скриптов
$version = "0.0.0.0";

// Убираем ненужные стили и скрипты с head
require_once 'functions/remove_actions.php';

// Подключение стилей
require_once 'functions/action_styles.php';

// Подключение скриптов
require_once 'functions/action_scripts.php';


// Регистрация Меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
	register_nav_menu( 'menu_main_footer', 'Меню в подвале' );
    register_nav_menu( 'menu_main_footer_1', 'Меню каталог в подвале' );
    add_theme_support('post-thumbnails');
}

// Удаление подписи у пагинации
function sanitize_pagination($content) {
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
    return $content;
}
add_action('navigation_markup_template', 'sanitize_pagination');

// Кастомные типы постов
// Регистрация типа поста - Блог
require_once 'functions/action_custom_blog.php';
// Регистрация типа поста - Техника
require_once 'functions/action_custom_technique.php';



// Добавление placeholder в поиск
function my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Введите для поиска..." />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	</div>
	</form>';
	return $form;
}   
add_filter( 'get_search_form', 'my_search_form', 100 );

// Кастомные поля
add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
    require_once('carbon-fields/theme-options.php');
	require_once('carbon-fields/post-meta.php');
	require_once('carbon-fields/term-meta.php');
}

// --------WOOCOMMERCE--------
require_once 'functions/woocommerce/wc-options.php';

// require get_template_directory() . '/sendemail.php';