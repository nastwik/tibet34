<section class="content-section mt-80 mb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <div class="subtitle">Контакты для связи</div>
          <div class="title">Профессио<wbr>нальная консультация</div>
        </div>
      </div>
      
      <?
        if(carbon_get_theme_option('site_adress')) {
            ?>
              <div class="col-lg-3 col-md-6">
                <div class="contact-box"> 
                  <figure><img src="<?=get_template_directory_uri()?>/images/icons/location.png" alt="Image"></figure>
                  <div class="title">Адрес</div>
                  <p><?=carbon_get_theme_option('site_adress')?></p>
                </div>
              </div>
            <?
        }
      ?>
      
      <?
        if(carbon_get_theme_option('site_phone') || carbon_get_theme_option('site_phone_2')) {
          ?>
            <div class="col-lg-3 col-md-6">
              <div class="contact-box"> 
                <figure><img src="<?=get_template_directory_uri()?>/images/icons/telephone.png" alt="Image"></figure>
                <div class="title">Телефоны</div>
                <p><a href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a> 
                <br><a href="tel:<?=carbon_get_theme_option('site_phone_digits_2')?>"><?=carbon_get_theme_option('site_phone_2')?></a></p>
              </div>
            </div>
          <?
        }
      ?>

      <?
        if(carbon_get_theme_option('site_email')) {
          ?>
            <div class="col-lg-3 col-md-6">
              <div class="contact-box"> 	
                <figure><img src="<?=get_template_directory_uri()?>/images/icons/email.png" alt="Image"></figure>
                <div class="title">Email</div>
                <p><a href="mailto:<?=carbon_get_theme_option('site_email')?>"><?=carbon_get_theme_option('site_email')?></a></p>
              </div>
            </div>
          <?
        }
      ?>
      
      
      <div class="col-lg-3 col-md-6">
        <div class="contact-box" style="margin-bottom: 0"> 	
			    <figure><img src="<?=get_template_directory_uri()?>/images/icons/massangers.png" alt="Image"></figure>
          <div class="title">Мессенджеры</div>
          <p><a href="#">WhatsApp</a></p>
        </div>
      </div>
    </div>
  </div>
</section>