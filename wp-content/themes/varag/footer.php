  <section class="footer-bar">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <figure class="logo hide">
            <a href="/">
              <img src="<?=wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_full' ), 'full' );?>" alt="Image">
            </a>
          </figure>
          <div class="caption">Нужен бетон?</div>
          <a href="#" class="button section__button section__button1">Оставить заявку</a> 
          <?
            if(carbon_get_theme_option('site_phone') || carbon_get_theme_option('site_phone_2')) {
              ?>
                <div class="sales-representive">
                  <a href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><b><?=carbon_get_theme_option('site_phone')?></a>,
                  <a href="tel:<?=carbon_get_theme_option('site_phone_digits_2')?>"><b><?=carbon_get_theme_option('site_phone_2')?></b></a>
                </div>
              <?
            }
          ?>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex d-md-block flex-column align-items-center">
          <div class="logo mb-4" style="max-width:150px;">
            <a href="/"><img src="<?=wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_full' ), 'full' );?>" alt="Image"></a>
          </div>
          <div class="widget-title">КОНТАКТЫ</div>
          <ul>
            <?
              if(carbon_get_theme_option('site_adress')) {
                  ?>
                    <li class="single-list"><?=carbon_get_theme_option('site_adress')?></li>
                  <?
              }
            ?>
            <?
              if(carbon_get_theme_option('site_phone')) {
                  ?>
                    <li class="single-list"><a class="single-link" href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a></li>
                  <?
              }
            ?>
            <?
              if(carbon_get_theme_option('site_phone_2')) {
                  ?>
                    <li class="single-list"><a class="single-link" href="tel:<?=carbon_get_theme_option('site_phone_digits_2')?>"><?=carbon_get_theme_option('site_phone_2')?></a></li>
                  <?
              }
            ?>
            <?
              if(carbon_get_theme_option('site_email')) {
                  ?>
                    <li class="single-list"><a class="single-link" href="mailto:<?=carbon_get_theme_option('site_email')?>"><?=carbon_get_theme_option('site_email')?></a></li>
                  <?
              }
            ?>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="widget-title">МЕНЮ</div>
          <?php
              wp_nav_menu( [
                  'theme_location'  => 'menu_main_footer',
                  'container'       => null,
                  'menu_class'      => '',
              ] );
          ?>
        </div>

        <div class="col-lg-4">
          <div class="widget-title">КАТАЛОГ</div>
          <?php
              wp_nav_menu( [
                  'theme_location'  => 'menu_main_footer_1',
                  'container'       => null,
                  'menu_class'      => '',
              ] );
          ?>
        </div>

        <div class="col-12">
          <div class="footer-bottom">
            <span>
              © 2024 Варяг | Разработка сайта <img src='<?=get_template_directory_uri()?>/images/flamingo_logo.svg'>
              <a href="https://flamingo.expert" target="_blank">Flamingo.expert</a>
            </span>
            <?
              if(carbon_get_theme_option('site_whatsapp')) {
                ?>
                  <div class="social"><a href="https://api.whatsapp.com/send?phone=<?=carbon_get_theme_option('site_whatsapp')?>">WhatsApp</a></div>
                <?
              }
            ?>
          </div>
        </div>

      </div>
    </div>
    <?php get_template_part( 'include/forms/leadform', 'lead' );?>
    <?php get_template_part( 'include/forms/leadform', 'betononasos' );?>
    <?php get_template_part( 'include/forms/leadform', 'product' );?>
  </footer>	

  

	<?=wp_footer();?>
 
	</body>
</html>