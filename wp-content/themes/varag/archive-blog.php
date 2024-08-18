<?php get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1>Статьи</h1>
	  <ul>
      <li><a href="/">Главная</a></li>
	  	<li>Статьи</li>
	  </ul>
  </div>
</header>

<section class="content-section no-mobil-top-spacing">
  <div class="container">
    <div class="row">
      <?php 
        if ( have_posts() ) : ?>
        
          <!-- начало цикл -->
          <?php while ( have_posts() ) : the_post();

              $blog_id = get_the_ID();
              $blog_photo = get_the_post_thumbnail_url($blog_id, 'large');
              $blog_link = get_permalink($blog_id);
              $blog_title = get_the_title();
          ?>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="recent-article">
                <figure>
                  <img src="<?=$blog_photo?>" alt="image">
                </figure>
                <div class="content">
                  <small><?=get_the_date()?></small>
                  <div class="title">
                    <a href="<?=$blog_link?>"><?=$blog_title?></a>
                  </div>
                  <div class="mt-3">
                    <?=the_excerpt();?>
                  </div>
                </div>
              </div>
            </div>
              
          <?php endwhile; ?>
          <!-- конец цикла -->
        
      <?php endif; ?>
    </div>
  </div>
  <?php

    $args = array(
        'show_all'     => false, // показаны все страницы участвующие в пагинации
        'end_size'     => 1,     // количество страниц на концах
        'mid_size'     => 1,     // количество страниц вокруг текущей
        'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
        'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
        'screen_reader_text' => __( 'Posts navigation' ),
    );

    the_posts_pagination( $args );

  ?>	  
</section>

<?php get_footer(); ?>