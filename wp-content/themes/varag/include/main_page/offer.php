<div class="wrapper">
  <header class="slider">
    <div class="container">
      <div class="swiper-container slider-content">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="inner">
              <div class="inner__title">
                Качественный бетон <br>и
                <span class="accent-word">спецтехника</span><br> в Волгограде и Волжском
              </div>
              <p>Наш арсенал — ваш крепкий фундамент спокойствия</p>
              <div class="inner__button">
                <?
                  if(carbon_get_theme_option('site_phone')) {
                      ?>
                        <a href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a>
                      <?
                  }
                ?>
                <a class="section__button section__button1">Оставить заявку</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-container slider-main">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-image">
              <img src="<?=get_template_directory_uri()?>/images/offer-pic.png"> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>


