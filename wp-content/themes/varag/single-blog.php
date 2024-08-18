<?php get_header(); ?>

<?php
	$blog_id = get_the_ID();
	$blog_photo = get_the_post_thumbnail_url($blog_id, 'full');
	$blog_title = get_the_title();
	$blog_decription = get_the_content();
?>

<header class="page-header">
  <div class="container">
    <h1><?=$blog_title?></h1>
	  <ul>
	   	<li><a href="/">Главная</a></li>
	  	<li><a href="/blog/">Статьи</a></li>
      	<li><?=$blog_title?></li>
	  </ul>
  </div>
</header>

<section class="content-section no-mobil-top-spacing">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
         <div class="news-box">
			<?php
				if($blog_photo){
					?>
						<figure>
							<img src="<?=$blog_photo?>" alt="Image">
						</figure>
					<?
				}
			?>
			
			<div class="content">
				<small><?=get_the_date()?></small>

				<div class="title"><?=$blog_title?></div>

				<?php
					if($blog_decription) {
						?>
							<div>
								<?=$blog_decription?>
							</div>
						<?
					}
				?>
				
			</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mb-80"></div>

<?php get_footer(); ?>