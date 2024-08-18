<?php get_header(); ?>

<?php
    $content = get_the_content();
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]>', $content );
    $content = mb_substr($content, 0,50).'...';
?>

<header class="page-header">
  <div class="container">
    <h1>Поиск по сайту</h1>
	  <ul>
	   	<li><a href="/">Главная</a></li>
      	<li>Поиск</li>
	  </ul>
  </div>
</header>

<section class="content-section no-mobil-top-spacing">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="fl-search-area__title pb-4">Результаты поиска по: "<?php echo $_GET['s'];?>"</h1>
            <div class="fl-search-area__block">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php 
                    
                    
                        $post_id = $post->ID ;
                        $post_type = get_post_type( $post_id );
                        $post_type_name = '';

                        if ($post_type == 'page') {
                            $post_type_name = 'Одиночная страница';
                        }

                        if ($post_type == 'blog') {
                            $post_type_name = 'Раздел статей';
                        }
                    
                    ?>
                
                    <div class="fl-search-area__item">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        <p><?=$post_type_name?></p>
                    </div>
                    <?php endwhile; else: ?>
                    <p>Поиск не дал результатов.</p>
                <?php endif;?>
            </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>