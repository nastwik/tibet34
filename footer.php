<section class="footer-bar">
	  <div class="container">
    <div class="row">
      <div class="col-12">
          <figure class="logo"> <a href="index.php"><img src="images/logo/logo.png" alt="Image"></a> </figure>
          <h2>Нужен бетон?</h2>
          <a href="#" class="button section__button section__button1">Оставить заявку</a> 
		  <div class="sales-representive">
			  <a href="tel:8443337908"><b>(8443) 33-79-08</a>, <a href="tel:8443338466"><b>(8443) 33-84-66</b></a>
		  </div>
		</div>
    </div>
  </div>
		</section>
    
    <div class="modal modal1">
  <div class="modal__main">
    <div class="modal__title">Оставьте заявку</div>
    <div class="modal__container">
      <div class="modal-form">
          <form>
            <input type="tel" required name="phone" id="phone" class="phone" placeholder="+7(___)___-__-__">
            <input type="text" placeholder="Имя">
            <input type="submit" value="Отправить">
          </form>
        </div>
        <p>Нажимая кнопку "Отправить", Вы соглашаетесь с <a href="privacy-policy.php"><span class="decorate-dark">Политикой конфиденциальности</span></a></p>
    </div>
    <button class="modal__close">&#10006;</button>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h6 class="widget-title">КОНТАКТЫ</h6>
	 <ul>
				<li class="single-list">г. Волжский,<br> ул. Александрова, 78 г</li>
				<li class="single-list"><a class="single-link" href="tel:8443337908">(8443) 33-79-08</a></li>
				<li class="single-list"><a class="single-link" href="tel:8443338466">(8443) 33-84-66</a></li>
				<li class="single-list"><a class="single-link" href="mailto:beton.volga@mail.ru">beton.volga@mail.ru</a></li>
		  </ul>
      </div>
		<div class="col-lg-4 col-md-6">
        <h6 class="widget-title">МЕНЮ</h6>
		  <ul>
				<li class="single-list"><a class="single-link" href="about.php">О компании</a></li>
				<li class="single-list"><a class="single-link" href="rental-equipment.php">Аренда спецтехники</a></li>
				<li class="single-list"><a class="single-link" href="articles.php">Статьи</a></li>
				<li class="single-list"><a class="single-link" href="contact.php">Контакты</a></li>
		  </ul>
      </div>
		<div class="col-lg-4">
        <h6 class="widget-title">БЕЗОПАСНОСТЬ</h6>
       <a class="single-link" href="privacy-policy.php">Политика конфиденциальности</a>
      </div>
		<div class="col-12">
			<div class="footer-bottom">
				<span>© 2024 Варяг | Разработка сайта <img src='images/flamingo_logo.svg'><a href="https://flamingo.expert" target="_blank">Flamingo.expert</a></span>
				<ul>
				<li><a href="#">WhatsApp</a></li>
				</ul>
			</div>
		</div>
    </div>
  </div>
</footer>	

	<script src="https://unpkg.com/imask"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/odometer.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    $(document).ready(function(){
      $("#phone").inputmask("9(999)999-99-99");
    })
  </script>
	</body>
</html>