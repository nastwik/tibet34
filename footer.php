<section class="footer-bar mt-148">
	  <div class="container">
    <div class="row">
      <div class="col-12">
		  
          <figure class="logo"> <img src="images/logo.png" alt="Image"> </figure>
          <h2>Live <b>better</b> and <b>beautiful</b></h2>
          <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a> 
		  <div class="sales-representive">
		  	<figure>
			  	<img src="images/author01.jpg" alt="Image">
			  </figure>Sales representative
			  
			  <b>+1 (850) 344 0 66 #20</b> free call !
		  </div>
		</div>
    </div>
  </div>
		
		</section>
        <!-- end footer-bar --> 
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h6 class="widget-title">HEADQUARTER</h6>
        <address><p>г. Волжский, ул. Александрова,<br> 78 г
        </p>
		  <p>+9(999) 999-99-99</p>
      <p>aaaaa@mail.ru</p>
    </address>
      </div>
		<div class="col-lg-4 col-md-6">
        <h6 class="widget-title">SALES OFFICES</h6>
        <address><p>121 South 8th Street, Suite 1200<br>
Minneapolis MN 55402</p>
		  <p>+1 (850) 344 0 66 #20</p>
			<a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>
			</address>
      </div>
		<div class="col-lg-4">
        <h6 class="widget-title">SUBSCRIPTION</h6>
       <p>For more information, please join us.</p>
			<form>
			<input type="email" placeholder="Type your e-mail">
				<input type="submit" value="JOIN NOW">
			</form>
      </div>
		<div class="col-12">
			<div class="footer-bottom">
				<span>© 2020 Consto | Industrial Construction Company</span>
				<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Twitter</a></li>
				</ul>
			</div>
		</div>
    </div>
  </div>
</footer>
	<div id="sales-specialist-form">
		<form>
			<div class="form-group">
			<span>Full Name</span>
				<input type="text">
			</div>
			<div class="form-group">
			<span>Phone Number</span>
				<input type="text">
			</div>
			<div class="form-group">
			<span>Current E-mail</span>
				<input type="email">
			</div>
			<div class="form-group">
				<input type="submit" value="REQUEST A CALL">
			</div>
		</form>
	</div>	


<script src="js/jquery.min.js"></script>
<!-- <script src="js/jquery/jquery-3.7.1.js"></script> -->
<!-- <script src="js/jquery.maskedinput.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/odometer.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    $(document).ready(function(){
      $("#phone").inputmask("9(999)999-99-99");
    })
  </script>
  <!-- <script>
jQuery(document).on('click', 'form [type="submit"]', function() {
    var m = jQuery(this).closest('form');
    var fio = m.find('input[name*="name"]').val();
    var phone = m.find('input[type*="tel"],input[name*="phone"],input[data-type*="phone"]').val();
    var mail = m.find('input[name*="email"],input[name*="senderEmail"]').val();
    var ct_site_id = '51044';
    var sub = 'Заявка c '+ location.hostname;
    var ct_data = {            
        fio: fio,
        phoneNumber: phone,
        email: mail,
        subject: sub,
        requestUrl: location.href,
        sessionId: window.call_value
    };
    console.log(ct_data);
    if (!!phone||!!mail){
        jQuery.ajax({ 
          url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
          dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    };
});
</script> -->
</body>
</html>