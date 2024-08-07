<? require_once 'header.php' ?>
<header class="page-header">
  <div class="container">
    <h1>Каталог</h1>
	  <ul>
        <li><a href="index.php">Главная</a></li>
		<li>Каталог</li>
	  </ul>
  </div> 
</header>
   <section class="content-section ">
		<div class="container">
			<div class="row">
                <div class="col-lg-12">
                    <div class="catalog-container">
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category01.jpg" alt="concrete">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Бетон товарный</a></span>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category02.jpeg" alt="concrete">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Бетон усиленный</a></span>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category03.jpg" alt="tile">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Цементный раствор</a></span>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category04.jpeg" alt="concrete">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Плитка, бордюры</a></span>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category05.jpg" alt="concrete">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Блоки ФБС</a></span>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/category06.jpg" alt="tile">
                            </div>
                            <div class="content">
                                <span><a href="trade-concrete.php">Стройматериалы</a></span>
                            </div>
                        </div>
                    </div>

                    <section class="pricing-section centred">
                        <div class="col-12">
                            <div class="section-title">
                                <div class="subtitle">Наши цены</div>
                                <div class="title">Демократичный прайс на выбранные позиции</div>
                            </div>
                        </div>
                        <div class="concrete-price">
                            <div class="fl-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Наименование конструкции</th>
                                            <th>Марка бетона</th>
                                            <th>Стоимость, руб. **</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="4">Товарный бетон</td>
                                            <td>Бетон М-200П2 (В15)</td>
                                            <td>от 5900</td>
                                        </tr>
                                        <tr>
                                            <td>Бетон М-250П2 (В 20)</td>
                                            <td>от 6100</td>
                                        </tr>
                                        <tr>
                                            <td>Бетон М-300П2 (В 22,5)</td>
                                            <td>от 6500</td>
                                        </tr>
                                        <tr>
                                            <td>Бетон М-350П2 (В 25)</td>
                                            <td>от 6700</td>
                                        </tr>
                                        <tr class="gray">
                                            <td rowspan="4">Усиленный бетон</td>
                                            <td>М-200W4</td>
                                            <td>от 6100</td>
                                        </tr>
                                        <tr class="gray">
                                            <td>М-250W4</td>
                                            <td>от 6200</td>
                                        </tr>
                                        <tr class="gray">
                                            <td>М-300W4</td>
                                            <td>от 6500</td>
                                        </tr>
                                        <tr class="gray">
                                            <td>М-350W4-W6</td>
                                            <td>от 6700</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Цементный раствор</td>
                                            <td>М-100</td>
                                            <td>от 4250</td>
                                        </tr>
                                        <tr>
                                            <td>М-150</td>
                                            <td>от 4650</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
      </section>
      
<section class="content-section" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
    <div class="col-lg-7">
        <div class="section-title text-left">
          <div class="title">Оставьте заявку</div>
          <div class="caption" style="margin-bottom: -50px">Укажите свой номер</div>
        </div>
      </div>
      <div class="col-lg-5">
        <p>Широкий ассортимент товаров и спецтехника для вашего объекта! Наш специалист поможет с выбором подходящей марки для конкретных конструкций.</p>
      </div>
      <div class="col-12">
            <div class="form-list-section">
                <form class="form-inline" action="/action_page.php">
                    <input type="tel" required name="phone" id="phone" class="phone form-inline__item" placeholder="+7(___)___-__-__">
                    <input type="text" id="pwd" class="form-inline__item" placeholder="Имя">
                <button type="submit" class="form-inline__item">Отправить</button>
                </form>
                <p>Нажимая кнопку "Отправить", Вы соглашаетесь с <span class="decorate"><a href="">Политикой конфиденциальности</a></span></p>
            </div>
        </div>
    </div>
  </div>
</section>

<? require_once 'footer.php' ?>	