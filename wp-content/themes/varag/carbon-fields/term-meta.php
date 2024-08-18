<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'term_meta', __( 'Category Properties' ) )
    ->where( 'term_taxonomy', '=', 'product_cat' )
    ->add_fields( array(
        Field::make( 'checkbox', 'table_price', 'Показывать таблицу цен на бетон' ),
    ));