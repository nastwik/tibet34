<?php

function fl_all_catigories(){
                    
    global $wp_query;

    $current_cat = $wp_query->get_queried_object();
    $current_cat_id = $current_cat->term_id;


    $categories = get_terms( ['taxonomy' => 'product_cat', 'hide_empty'=>false, 'parent'=>0] );
    $categories_parent = array();

    
    ?>
        <div class="widget">
            <div class="widget-title">КАТЕГОРИИ</div>
            <ul class="categories">
                <?php
                    foreach ($categories as $cat) {
                        $cat_link = get_category_link( $cat->term_id );
                        $active;

                        $cat->term_id === $current_cat_id ? $active = 'active-page' : $active = '';

                        $categories_1;
                        if($cat->term_id === $current_cat_id){
                            $categories_1 = get_terms( ['taxonomy' => 'product_cat', 'hide_empty'=>false, 'parent'=> $cat->term_id] );
                        }

                        
                        
                        ?>
                            <li class="<?=$active?>">
                                <a href="<?=$cat_link?>"><?=$cat->name?></a>
                            </li>
                            <?
                                if($cat->term_id === $current_cat_id){
                                    foreach ($categories_1 as $cat_1) {
                                       ?><li class="subcategories"><a href="<?=get_category_link( $cat_1->term_id )?>"><?=$cat_1->name?></a></li><?
                                    }
                                }
                            ?>
                        <?
                    }
                ?>
            </ul>  
        </div> 
    <?
                    
}