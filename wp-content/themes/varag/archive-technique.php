<?php

$technique = get_posts( array(
    'post_type'   => 'technique',
) );

// Header
get_header();

?>

<header class="page-header">
  <div class="container">
    <h1>Аренда спецтехники</h1>
	  <ul>
      <li><a href="/">Главная</a></li>
	  	<li>Аренда спецтехники</li>
	  </ul>
  </div>
</header>

<div class="mt-160"></div>

<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="section-title">
          <div class="subtitle">Аренда автобетононасосов</div>
          <div class="title">Предоставим в любое время и день</div>
        </div>
      </div>
      <div class="col-lg-6">
        <figure class="side-image"><img src="<?=get_template_directory_uri()?>/images/cars/bet_03.jpg" alt="Image"></figure>
      </div>
      <div class="col-lg-6">
        <div class="side-content">
          <p>В строительной отрасли случаются ситуации, когда требуется залить смесь в котлован, но автобетоносмеситель не может подъехать достаточно близко. Также иногда требуется подать бетон на высоту выше 5 м, например. Или же залить монолитное перекрытие на объекте. Здесь незаменимым помощником становится автобетононасос.
          Мы предлагаем услугу аренды бетононасосной установки от ведущего мирового производителя — компании Putzmeister («Путцмайстер») и Zoomlion («Зумлион»). Это оборудование включает шасси и насосную распредстрелу нужного развертывания. Техника этой марки зарекомендовало себя как надежное и эффективное решение для выполнения бетонных работ различной сложности для строительных проектов любого масштаба.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mt-160"></div>

<section class="content-section no-spacing-pro no-tablet-spacing form-about">
  <div class="container">
    <div class="row align-items-center no-gutters tab-content">
      <div class="col-lg-5">
        <?php get_template_part( 'include/forms/leadform', 'car' );?>
      </div>
      <div class="col-lg-7">
        <div class="tab-right">
        <div id="tab01" class="tab-item active-item"><img src="<?=get_template_directory_uri()?>/images/section-bg03.jpg" alt="Image"></div>
      </div>
    </div>
  </div>
</section>

<?php 
    if ( $technique ) : ?>

        <section class="content-section mt-80 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                        <div class="subtitle">Автобетононасосы</div>
                        <div class="title">Наши модели спецтехники под задачу</div>
                        </div>
                    </div>
                    <div class="catalog">

                        <?
                          foreach( $technique as $post ){
                            setup_postdata( $post );

                            $technique_photo = get_the_post_thumbnail_url($post->ID, 'large');
                            $car_photo = get_the_post_thumbnail_url($post->ID, 'full');
                            $car_title = get_the_title();

                            ?>
                              <div class="cell">
                                  <div class="concrete-pump">
                                      <figure>
                                          <img src="<?=$technique_photo?>" alt="image">
                                      </figure>
                                      <div class="content">
                                          <div class="title"><a href="/technique/"><?=$post->post_title?></a></div>
                                      </div>
                                      <a>
                                          <div class="button-order section__button section__button2">Заказать</div>
                                      </a>
                                  </div>
                              </div>
                            <?
                          }

                          wp_reset_postdata(); // сброс
                        ?>

                    </div>
                </div>
            </div>
        </section>
    
<?php endif; ?>

<div class="mb-80"></div>

<?php get_footer(); ?>