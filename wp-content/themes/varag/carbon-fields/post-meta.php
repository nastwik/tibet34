<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Дополнительные поля на разделе проектов
Container::make( 'post_meta', __( 'Поля проекта' ))
->show_on_post_type('product')
->add_fields( array(
    Field::make( 'checkbox', 'betononsos_use', 'Подходит для бетононасоса' ),
));
