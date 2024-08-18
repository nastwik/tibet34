<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Обертка товара в контейнер
add_action('woocommerce_before_single_product', 'fl_start_wrapper_product', 5);
function fl_start_wrapper_product(){
    ?>
        <section class="content-section no-mobil-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <aside class="sidebar hide">
                        <? fl_all_catigories(); ?>
                        </aside>
                    </div>
                    <div class="col-12 col-lg-9 mb-5 mb-md-0">
                        <div class="card-section">
                
    <?
}

// Конец обертки товара в контейнер, вывод атрибутов
add_action('woocommerce_after_single_product', 'fl_end_wrapper_product', 5);
function fl_end_wrapper_product(){
    ?>      
                        </div>
                    </div>  
                </div>
            </div>
        </section>
    <?
}

// Обертка основной информации на старнице продукта
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

add_action('woocommerce_before_single_product_summary', 'fl_start_content_wrapper', 10);
function fl_start_content_wrapper(){
    ?>
        <div class="main">
            <div class="main-photo">
                <?=woocommerce_show_product_images();?>
            </div>
                
    <?
}

add_action('woocommerce_single_product_summary', 'fl_characters', 5);
function fl_characters(){

    global $product;

    // Атрибуты
    $klass_betona = $product->get_attribute( 'pa_klass-betona' );
    $marka_betona = $product->get_attribute( 'pa_marka-betona' );
    $podvizhnost = $product->get_attribute( 'pa_podvizhnost' );

    ?>
        <div class="characters">
            
            <div class="characters__item">
                <div class="characters__icon">
                    <img src="<?=get_template_directory_uri()?>/images/icons/b-icon.png" alt="">
                </div>
                <div class="characters__right">
                    <div class="characters__title decorate">Класс бетона</div>

                    <?
                        if($klass_betona) {
                            ?><div class="characters__text"><?=$klass_betona?></div><?
                        } else {
                            ?><div class="characters__text">-</div><?
                        }
                    ?>
                    
                </div>
            </div>
            <div class="characters__item">
                <div class="characters__icon">
                    <img src="<?=get_template_directory_uri()?>/images/icons/f.png" alt="">
                </div>
                <div class="characters__right">
                    <div class="characters__title decorate">Марка бетона</div>
                    <?
                        if($marka_betona) {
                            ?><div class="characters__text"><?=$marka_betona?></div><?
                        } else {
                            ?><div class="characters__text">-</div><?
                        }
                    ?>
                </div>
            </div>
            <div class="characters__item">
                <div class="characters__icon">
                    <img src="<?=get_template_directory_uri()?>/images/icons/p-icon.png" alt="">
                </div>
                <div class="characters__right">
                    <div class="characters__title decorate">Подвижность</div>
                    <?
                        if($podvizhnost) {
                            ?><div class="characters__text"><?=$podvizhnost?></div><?
                        } else {
                            ?><div class="characters__text">-</div><?
                        }
                    ?>
                </div>
            </div>
        </div>
    <?
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_before_single_product_summary', 'fl_meta', 30);

function fl_meta() {

    global $product;
    $price = $product->get_regular_price();
    $unit = get_post_meta( $product->get_ID(), '_select', true );

    $betononsos = carbon_get_post_meta( $product->get_ID(), 'betononsos_use' );
	
    ?>
        <div class="main-details">
            <div class="main-details-name"><?=$product->get_title();?></div>
            <div class="row">
                <div class="col-12">
                    <span class="main-details-desc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"></path>
                        </svg>
                        В наличии
                    </span>
                </div>
               
                <?
                    if($betononsos) {
                        ?> 
                            <div class="col-12">
                                <span class="main-details-desc">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/>
                                    </svg>
                                    Подходит для бетононасоса
                                </span>
                            </div>
                        <?
                    }
                ?>
                
            </div>
            <hr class="hide">
            <?
                if($price) {
                    ?><div class="main-details-price"><?=$price?>&nbsp;₽/<?=$unit?></div><?
                } else {
                    ?><div class="main-details-price">Цена по запросу</div><?
                }
            ?>

            <button class="main-details-application section__button3">Оставить заявку</button>
            
        </div>
    </div>
    <?
}


// Конец обертки основной информации на старнице продукта
add_action('woocommerce_after_single_product_summary', 'fl_end_content_wrapper', 5);
function fl_end_content_wrapper(){

    global $product;
    $desription = $product->post->post_content;

    ?>  
       </div>
        <!-- Полное описание продукта -->
            <?
                if($desription != '') {
                    ?>
                        <div class="catalog-single__bottom mt-5">
                            <div class="catalog-single__descp">
                                <h2>Описание продукта</h2>
                                <div>
                                    <?=$desription?>
                                </div>
                            </div>
                        </div>
                    <?
                }
            ?>
    <?
}



remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 20);

add_action('woocommerce_after_single_product', 'fl_add_text', 30);

function fl_add_text() {
    ?>
                <section class="content-section no-spacing no-tablet-spacing mb-100">
                    <div class="container">
                        <div class="mixer-box">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="side-content side-content-left">
                                    <p>Усиленный бетон и цементные растворы мы по умолчанию доставляем в автобетоносмесителе для общего удобства. Чтобы ускорить процесс заливки, воспользуйтесь услугой аренды бетононасоса. Актуально для марок бетона, подходящих для АБН. </p>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <figure class="side-image"><img src="<?=get_template_directory_uri()?>/images/cars/mixer-blue.jpg" alt="Image"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </section>
    <?
}

