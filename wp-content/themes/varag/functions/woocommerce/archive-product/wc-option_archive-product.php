<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Обертка страницы товаров в контейнер
add_action('woocommerce_before_main_content', 'fl_archive_start_wrapper', 40);
function fl_archive_start_wrapper(){
    if(! is_product() ){
        ?>
          <section class="content-section no-mobil-spacing">
            <div class="container">
                <div class="row">
                  <? 
                    if(is_shop()){
                      ?><div class="col-lg-12"><?
                    }

                    if(is_product_category()){
                      ?>
                        <div class="col-lg-3">
                          <aside class="sidebar hide">
                            <? fl_all_catigories(); ?>
                            <?
                              fl_sidebar_filters();
                            ?>
                          </aside>
                        </div>
                        <div class="col-lg-9">
                      <?
                    }
                  ?>
        <?
    }
    
}

// Конец обертки страницы товаров в контейнер
add_action('woocommerce_after_main_content', 'fl_archive_end_wrapper', 10);
function fl_archive_end_wrapper(){
    if(! is_product() ){
        ?>
              </div>
              </div>
              </div>
              <!-- <div class="block-space block-space--layout--before-footer"></div> -->
          </section> 
          
          <?php 
            if(!is_shop()){
              $category = get_queried_object();
              $cat_id = $category->term_id;
              $table = carbon_get_term_meta($cat_id, 'table_price');

              if($table){
                get_template_part( '/include/price', 'table' ); 
              }
            }
          ?>
          <?php get_template_part( '/include/forms/leadform', 'catalog' ); ?>
          
        <?
    }
    
}


// Отделяем категории от товаров в отдельный контейнер

remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories' );
add_action( 'woocommerce_before_main_content', 'msc_product_loop_start', 40 );
add_action( 'woocommerce_before_main_content', 'msc_maybe_show_product_subcategories', 50 );
add_action( 'woocommerce_before_main_content', 'msc_product_loop_end', 60 );


//Conditonally start the product loop with a <ul> contaner if subcats exist.
function msc_product_loop_start() {
  $subcategories = woocommerce_maybe_show_product_subcategories();
  if ( $subcategories ) {
    echo '<div class="catalog-container">';
  }
}

//Print the subcat <li>s in our new location.
function msc_maybe_show_product_subcategories() {
  echo woocommerce_maybe_show_product_subcategories();
}

//Conditonally end the product loop with a </ul> if subcats exist.
function msc_product_loop_end() {
  $subcategories = woocommerce_maybe_show_product_subcategories();
  
  
  if ( $subcategories ) {
    
    echo '</div>';
  }
}

add_action( 'woocommerce_before_shop_loop', 'fl_filters', 30 );
function fl_filters() {
  
}

// Пагинация и описание категории
add_action('woocommerce_after_shop_loop', 'fl_add_panel_product_end',20);
function fl_add_panel_product_end(){

  $category = get_queried_object();
  $current_cat_id;
  $description = '';
  
  if($category->has_archive == ''){
    $current_cat_id = $category->term_id;
    $prod_term    =    get_term($current_cat_id,'product_cat');
    $description =    $prod_term->description;
  }
    
    ?>
        <div class="catalog__pagination">
          <?=woocommerce_pagination();?>
        </div>

        <?

          if($description ) {
            ?><div class="product-add-text mt-5"><?=$description?></div><?
          }

        ?>

    <?
}

// Убираем вывод количества товаров
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);

add_filter( 'woocommerce_product_subcategories_hide_empty', '__return_false' );

















