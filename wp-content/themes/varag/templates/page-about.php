<?php

/*
Template Name: О компании
*/

// Header
get_header();

?>

<header class="page-header mb-160">
  <div class="container">
    <h1>О компании</h1>
	  <ul>
	  	<li><a href="/">Главная</a></li>
		  <li>О компании</li>
	  </ul>
  </div> 
</header>

<section class="content-section no-spacing mb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="section-title">
          <div class="subtitle">Наши принципы</div>
          <div class="title">Следуем традициям и сохраняем твердость!</div>
        </div>
      </div>
      <div class="col-lg-6">
        <figure class="side-image"><img src="<?=get_template_directory_uri()?>/images/side-image03.jpg" alt="Image"></figure>
      </div>
      <div class="col-lg-6">
        <div class="side-content">
          <p>Наша компания уже около 20 лет специализируется на выпуске бетона и стройматериалов. Чтобы качество продукции оставалось на высоте, мы производим бетонные смеси по всем стандартам. Это позволяет улучшить подвижность, время схватывания, устойчивость к разным температурам. </p>
          <p>Наши специалисты предоставляют всю нужную информацию, чтобы вы могли спланировать бюджет.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section mt-160 white-space-bottom" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title text-left">
          <div class="subtitle">Твердые элементы вашего спокойствия</div>
          <div class="title">Всегда гарантируем...</div>
        </div>
      </div>
      <div class="col-lg-5">
        <p>Что касается ценностей, наша команда берет курс на интересы клиента. Мы за долгосрочные и доверительные отношения с заказчиками!</p>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-xs-12">
        <div class="step-box">
          <figure class="image">
            <img src="<?=get_template_directory_uri()?>/images/step04.jpg" alt="Image">
          </figure>
          <div class="content">
            <span>01.</span>
            <figure class="icon"><img src="<?=get_template_directory_uri()?>/images/icons/quality.png" alt="Image"></figure>
            <div class="title">Качество</div>
            <p>профессиональный уровень всех работ </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-xs-12">
        <div class="step-box">
          <figure class="image">
            <img src="<?=get_template_directory_uri()?>/images/step01.jpg" alt="Image">
          </figure>
          <div class="content">
            <span>02.</span>
            <figure class="icon"><img src="<?=get_template_directory_uri()?>/images/icons/stamp.png" alt="Image"></figure>
            <div class="title">Обязательность</div>
            <p> четкое соблюдение всех условий договора </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-xs-12">
        <div class="step-box">
          <figure class="image">
            <img src="<?=get_template_directory_uri()?>/images/step02.jpg" alt="Image">
          </figure>
          <div class="content">
            <span>03.</span>
            <figure class="icon"><img src="<?=get_template_directory_uri()?>/images/icons/time.png" alt="Image"></figure>
            <div class="title">Дедлайны</div>
            <p>четкое соблюдение сроков поставки </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-xs-12">
        <div class="step-box">
          <figure class="image">
            <img src="<?=get_template_directory_uri()?>/images/step03.jpg" alt="Image">
          </figure>
          <div class="content">
            <span>04.</span>
            <figure class="icon"><img src="<?=get_template_directory_uri()?>/images/icons/economy.png" alt="Image"></figure>
            <div class="title">Экономию</div>
            <p>демократичные расценки на услуги и товары </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mt-95"></div>

<section class="content-section no-spacing form-about">
  <div class="container">
    <div class="row align-items-center no-gutters tab-content">
        <div class="col-lg-5">
          <?php get_template_part( 'include/forms/leadform', 'callback' );?>
        </div>
        <div class="col-lg-7">
          <div class="tab-right">
          <div id="tab01" class="tab-item active-item"><img src="<?=get_template_directory_uri()?>/images/section-bg02.jpg" alt="Image"></div>
        </div>
    </div>
  </div>
</section>

<div class="mb-160"></div>

<?php get_footer(); ?>