<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Убираем ссылку со всей карточки товара
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);


// Обертка карточки товара в контейнер
add_action('woocommerce_before_shop_loop_item', 'fl_product_start_wrapper',15);
function fl_product_start_wrapper(){
    
    ?>
        <div class="line-card__content">
    <?
}


// Конец обертки карточки товара в контейнер
add_action('woocommerce_after_shop_loop_item', 'fl_product_end_wrapper',15);
function fl_product_end_wrapper(){
    
    ?>
        </div>
    <?
}


// Добавление кастомного заголовока в карточке товара
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);

add_action('woocommerce_shop_loop_item_title', 'fl_product_custom_title',10);
function fl_product_custom_title(){
    global $product;

    if ( $product ) {    
        $post_url =  $product->get_permalink();
        $post_name =  $product->get_title();
        
        // $dlina = $product->get_attribute( 'pa_dlina' );
        // $razmer_jachejki = $product->get_attribute( 'pa_razmer-jachejki' );
        // $vysota = $product->get_attribute( 'pa_vysota' );

        ?>
        <?
    }
}


// Добавление кастомной кнопки подробнее и цены в карточке товара
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);


add_action('woocommerce_after_shop_loop_item', 'fl_product_custom_price',10);
function fl_product_custom_price(){

    global $product;
    
    $price = $product->get_regular_price();
    $post_url =  $product->get_permalink();
    $unit = get_post_meta( $product->get_ID(), '_select', true );

    if($price) {
        ?>
            <div>
                <div class="card-price"><?=$price?>&nbsp;₽/<?=$unit?></div>
                <button class="card-button section__button section__button3"><a href="#">Оставить заявку</a></button>
            </div>
        <?
    } else {
        ?>
           <div>
                <div class="card-price">Цена по запросу</div>
                <button class="card-button section__button section__button3"><a href="#">Оставить заявку</a></button>
           </div>
        <?
    }
}

// Добавление кастомного изображения в карточке товара
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);

add_action('woocommerce_before_shop_loop_item_title', 'fl_product_custom_img',10);
function fl_product_custom_img(){

    global $product;

    if ( $product ) {   

        $post_thumbnail_id = $product->get_image_id();
        $post_url =  $product->get_permalink();
        $post_name =  $product->get_title();

        $betononsos = carbon_get_post_meta( $product->get_ID(), 'betononsos_use' );

        ?>

        <div class="line-card__left">
            <div class="line-img">
                <img src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id, 'large' ); ?>" alt="">
            </div>
            <div class="card-status">
                <div class="product-title"><a href="<?=$post_url?>"><?=$post_name?></a></div>
                <div class="product-desc">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/>
                        </svg>
                        В наличии
                    </div>

                    <?
                        if($betononsos) {
                            ?> 
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/>
                                    </svg>
                                    Подходит для бетононасоса
                                </div>
                            <?
                        }
                    ?>

                    
                    
                </div>
            </div>
        </div>

    <?
    }
}


// Добавление кастомного мета "Срок службы" в карточке товара перед заголовком
// add_action('woocommerce_before_shop_loop_item_title', 'fl_custom_meta');

function fl_custom_meta(){

    global $product;
    $lifespan = $product->get_attribute( 'pa_srok-sluzhby' );

    ?>
        <div class="catalog__card-content">
            
    <?
    
}