<?php

function fl_add_panel_product(){
    
    ?>
        <div class="block">
            <div class="products-view">
                <div class="products-view__options view-options view-options--offcanvas--mobile">
                            <div class="view-options__body">
                                <button type="button" class="view-options__filters-button filters-button">
                                    <span class="filters-button__icon"><svg width="16" height="16">
                                            <path d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z"></path>
                                        </svg>
                                    </span>
                                    <span class="filters-button__title">Фильтры</span>
                                </button>
                                <div class="view-options__layout layout-switcher">
                                    <div class="layout-switcher__list">
                                        <button type="button" class="layout-switcher__button layout-switcher__button--active" data-layout="grid" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z"></path>
                                            </svg>
                                        </button>
                                        <button type="button" class="layout-switcher__button" data-layout="table" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="view-options__legend">
                                    <?=woocommerce_result_count();?>
                                </div>
                                <div class="view-options__spring"></div>
                            </div>
                        </div>

                        <div class="products-view__list products-list products-list--grid--4" data-layout="grid" data-with-features="false">
                            <div class="products-list__head">
                                <div class="products-list__column products-list__column--image">Фото</div>
                                <div class="products-list__column products-list__column--meta">Срок службы</div>
                                <div class="products-list__column products-list__column--product">Товар</div>
                            </div>
    <?
}