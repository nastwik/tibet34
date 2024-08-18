<?php

function fl_sidebar_filters(){

    global $wp_query;

    ?>
        
            <?php 
                $filter_1 = do_shortcode('[br_filter_single filter_id=78]');
                $filter_2 = do_shortcode('[br_filter_single filter_id=79]');
                $filter_3 = do_shortcode('[br_filter_single filter_id=80]');
                
                
                if($filter_1 != '' || $filter_2  != '' || $filter_3  != '' ){
                    ?>
                        <div class="widget">
                            <div class="widget-title">ФИЛЬТР</div>
                            <?php
                                echo $filter_1;
                                echo $filter_2;
                                echo $filter_3;
                            ?>
                        </div>
                    <?
                }
                
            ?>
            
        
    <?
                    
}