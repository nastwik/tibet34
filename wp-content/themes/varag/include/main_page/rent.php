<?php
    $technique = get_posts( array(
        'post_type'   => 'technique',
    ) );
?>

<?php
  if($technique){

      global $post;

      ?>
          <section class="content-section mt-80 mb-80">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="section-title">
                    <div class="subtitle">Автобетононасосы на вашем объекте</div>
                    <div class="title">В срок, заявленная модель, без перебоев</div>
                  </div>
                </div>
                <div class="catalog">
                  <?
                    foreach( $technique as $post ){
                      setup_postdata( $post );

                      $technique_photo = get_the_post_thumbnail_url($post->ID, 'large');

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
          </section>
      <?
  }
?>




  