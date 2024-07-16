<? require_once 'header.php' ?>
<header class="page-header">
  <div class="container">
    <h2>Каталог</h2>
	  <ul>
	  	<li><a href="#">Главная</a></li>
		<li>Каталог</li>
	  </ul>
  </div> 
</header>
   <section class="content-section ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<aside class="sidebar">
						<div class="widget">
							<h6 class="widget-title">КАТЕГОРИИ</h6>
							<ul class="categories">
								<li><a href="#">Бетон с доставкой</a></li>
									<ul class="subcategories">
										<li><a href="trade-concrete.php">Товарный бетон</a></li>
										<li><a href="#">Усиленный бетон</a></li>
									</ul>
								<li><a href="#">Тротуарная плитка</a></li>
							</ul>
						</div>
					</aside>
				</div>
                <div class="col-lg-9">
                    <div class="catalog-container">
                        <div class="category">
                            <div class="category__img">
                                <img src="images/commodity.jpg" alt="concrete">
                            </div>
                            <p class="category__title">
                                <a href="trade-concrete.php">Товарный бетон</a>
                            </p>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/reinforced.jpeg" alt="concrete">
                            </div>
                            <p class="category__title">
                                <a href="">Усиленный бетон</a>
                            </p>
                        </div>
                        <div class="category">
                            <div class="category__img">
                                <img src="images/tile.jpeg" alt="tile">
                            </div>
                            <p class="category__title">
                                <a href="">Тротуарная плитка</a>
                            </p>
                        </div>
                        
                    </div>
                </div>

            </div>
      </section>
	

<? require_once 'footer.php' ?>	