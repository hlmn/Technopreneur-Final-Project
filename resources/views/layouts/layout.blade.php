
<!DOCTYPE html>
<html>
<head>
<title>InvestNation</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pendent Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
{{-- <script src="js/simpleCart.min.js"> </script> --}}
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
.btn-primary {
	color: #fff;
	background-color: #204056;
	border-color: #204056;
}

label{
	color: black;
}
</style>
@yield('style')
<body>
<!-- header -->

<!-- //header -->
<!-- top-header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			{{-- <div class="top_right">
				<ul>
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="login.html">Track Order</a></li>
				</ul>
			</div> --}}
			<div class="top_left">
				<ul>
					<li class="top_link"><button class="btn btn-primary">Daftar</button></a></li>|
					<li class="top_link"><bitton data-target="#myModal" data-toggle="modal" class="btn btn-primary" style="border-color:#204056;background-color: transparent; ">Masuk</button></li>
						{{-- Modal Login --}}
						<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header" style="border-bottom: 0">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h2 class="modal-title" style="color: black;text-align: center"><b>MASUK</b></h2>
						      </div>
						      <div class="modal-body">
						      	<label>Username</label>
						        <input style="background-color: #e4dad373;border-radius:12px" type="text" class="form-control" name="">
						        <label>Kata Sandi</label>
						        <input style="background-color: #e4dad373;border-radius:12px; type="text" class="form-control" name="">
						      </div>
						      <div class="modal-footer" style="border-top: 0">
						        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
						        <button type="button" class="btn btn-primary" style="width: 100%">Masuk</button><br>
						        <a style="float:right;color:red;font-size: 15px">Lupa kata sandi?</a>
						        <a style="float: left;font-size: 15px">Belum Terdaftar?</a>
						      </div>
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!-- top-header -->
<!-- logo-cart -->
<div class="header_top">
	<div class="container">
		<div class="logo">
		 	<a style="padding-left:0em" href="{{url('')}}"><img src="images/logo.png" style="width:150px;height:75px"></a>
		</div>
		{{-- <div class="header_right">
			<div class="cart box_1" style="margin-top:20px">
				<a href="checkout.html">
				<h3> <div class="total">
					<span class="simpleCart_total">Rp. 0</span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> 0 Investasi)</div>
					<img src="images/cart1.png" alt=""/></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>
		</div> --}}
		<div class="clearfix"></div>
	</div>
</div>
<!-- //logo-cart -->
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="grid @yield('home')"><a class="color1" href="{{url('')}}">Home</a></li>
			<li class="grid @yield('proyek')"><a class="color1" href="{{url('products')}}">Proyek Investasi</a>
			<li class="grid @yield('about')"><a class="color1" href="{{url('about')}}">Tentang Kami</a>
			<li class="grid @yield('faq')"><a class="color1" href="{{url('faq')}}">Pertanyaan</a>
				{{-- <div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.html">Slave Bracelets</a></li>
									<li><a href="products.html">Rings</a></li>
									<li><a href="products.html">Necklaces</a></li>
									<li><a href="products.html">Chokers</a></li>
									<li><a href="products.html">Cuff Links</a></li>
									<li><a href="products.html">Bangles</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.html">Men</a></li>
									<li><a href="products.html">Women</a></li>
									<li><a href="products.html">Brands</a></li>
									<li><a href="products.html">Kids</a></li>
									<li><a href="products.html">Accessories</a></li>
									<li><a href="products.html">Style Videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Jewellery</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div> --}}
			</li>
			{{-- <li><a class="color1" href="#">catalog</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.html">Slave Bracelets</a></li>
									<li><a href="products.html">Rings</a></li>
									<li><a href="products.html">Necklaces</a></li>
									<li><a href="products.html">Chokers</a></li>
									<li><a href="products.html">Cuff Links</a></li>
									<li><a href="products.html">Bangles</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.html">Men</a></li>
									<li><a href="products.html">Women</a></li>
									<li><a href="products.html">Brands</a></li>
									<li><a href="products.html">Kids</a></li>
									<li><a href="products.html">Accessories</a></li>
									<li><a href="products.html">Style Videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Jewellery</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>
			<li><a class="color1" href="#">Sale</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.html">Slave Bracelets</a></li>
									<li><a href="products.html">Rings</a></li>
									<li><a href="products.html">Necklaces</a></li>
									<li><a href="products.html">Chokers</a></li>
									<li><a href="products.html">Cuff Links</a></li>
									<li><a href="products.html">Bangles</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.html">Men</a></li>
									<li><a href="products.html">Women</a></li>
									<li><a href="products.html">Brands</a></li>
									<li><a href="products.html">Kids</a></li>
									<li><a href="products.html">Accessories</a></li>
									<li><a href="products.html">Style Videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Jewellery</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>
			<li><a class="color1" href="#">exclusive</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.html">Slave Bracelets</a></li>
									<li><a href="products.html">Rings</a></li>
									<li><a href="products.html">Necklaces</a></li>
									<li><a href="products.html">Chokers</a></li>
									<li><a href="products.html">Cuff Links</a></li>
									<li><a href="products.html">Bangles</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.html">Men</a></li>
									<li><a href="products.html">Women</a></li>
									<li><a href="products.html">Brands</a></li>
									<li><a href="products.html">Kids</a></li>
									<li><a href="products.html">Accessories</a></li>
									<li><a href="products.html">Style Videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Jewellery</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>
			<li><a  class="color1" href="#">collections</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Popular Brands</h4>
								<ul>
									<li><a href="products.html">Slave Bracelets</a></li>
									<li><a href="products.html">Rings</a></li>
									<li><a href="products.html">Necklaces</a></li>
									<li><a href="products.html">Chokers</a></li>
									<li><a href="products.html">Cuff Links</a></li>
									<li><a href="products.html">Bangles</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Style Zone</h4>
								<ul>
									<li><a href="products.html">Men</a></li>
									<li><a href="products.html">Women</a></li>
									<li><a href="products.html">Brands</a></li>
									<li><a href="products.html">Kids</a></li>
									<li><a href="products.html">Accessories</a></li>
									<li><a href="products.html">Style Videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>All Jewellery</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">commodi consequatur</a></li>
									<li><a href="products.html">illum qui dolorem</a></li>
									<li><a href="products.html">nihil molestiae</a></li>
									<li><a href="products.html">eum fugiat</a></li>
									<li><a href="products.html">consequatur eum</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li> --}}
		</ul>
			<div class="search">
				 <form action="products" method="get">
					<input type="text"  name="search" placeholder="Search...">
					<input type="submit" value="">
					</form>
			</div>
			<div class="clearfix"></div>
		 </div>
	  </div>
</div>
@yield('content')
<div class="footer">
  <div class="container">
    <div class="col-md-3 footer-grid">
      <h6>About us</h6>
      <p>Pengelolaan yang masih tradisional itu diakibatkan oleh paradigma peternak yang memandang bahwa peternakan merupakan usaha sampingan atau sekadar investasi jangka pendek. Sehingga bukan tak mungkin peternakan itu berjalan tanpa perencanaan.</p>
    </div>
    <div class="col-md-3 footer-grid">
      <h6>Information</h6>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Delivery Information</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms &amp; Conditions</a></li>
      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h6>My Account</h6>
      <ul>
        <li><a href="login.html">My Account</a></li>
        <li><a href="#">Order History</a></li>
        <li><a href="#">Wish List</a></li>
        <li><a href="#">Newsletter</a></li>
      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h6>Extras</h6>
      <ul>
        <li><a href="#">Brands</a></li>
        <li><a href="#">Gift Vouchers</a></li>
        <li><a href="#">Affiliates</a></li>
        <li><a href="#">Specials</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="footer-copy">
  <p>© 2015 Pendent Store. All rights reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
<!-- //footer -->
@yield('js')
</body>
</html>
