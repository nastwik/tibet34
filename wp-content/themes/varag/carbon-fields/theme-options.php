<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Тема' ) )
->add_tab( 'Общие настройки', array(
  Field::make( 'image ', 'site_logo_full', 'Основной логотип' )
  ->set_width(50),
  Field::make( 'image ', 'site_favicon', 'favicon' )
  ->set_width(50),
))
->add_tab( 'Контакты', array(
  Field::make( 'text', 'site_phone', 'Телефон 1' )->set_width(50),
  Field::make( 'text', 'site_phone_digits', 'Телефон 1 без пробелов (в формате +79999999999)' )->set_width(50),
  Field::make( 'text', 'site_phone_2', 'Телефон 2' )->set_width(50),
  Field::make( 'text', 'site_phone_digits_2', 'Телефон 2 без пробелов (в формате +79999999999)' )->set_width(50),

  Field::make( 'text', 'site_email', 'Email' )->set_width(33),
  Field::make( 'rich_text', 'site_map', 'Карта' )->set_width(33),
  Field::make( 'text', 'site_whatsapp', 'Whatsapp' )->set_width(33),

  Field::make( 'rich_text', 'site_adress', 'Адрес' )->set_width(50),
));