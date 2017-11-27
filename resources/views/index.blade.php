@extends('layouts.layout')
<!---->
<!-- content -->
<!-- banner -->
@section('style')
	<style>
		.banner-inf p {
	    color: white;
	    font-size: 14px;
	     margin: 0;
	    line-height: 1.8em;
			background: rgba(0,0,0,0.5);
		}
		.banner-inf h1 {
		    color: #fff;
		    font-size: 2em;
		    margin: 0;
		    text-transform: capitalize;
				background: rgba(0,0,0,0.5);
		}
		.welcome:after {
				background: none;
		    display: block;
		    content: '';
		    width: 455px;
		}
		.welcome:before {
			background: none;
		    display: block;
		    content: '';
		    width: 455px;
		}
	</style>
@endsection
@section('content')


	<div class="banner">
		<div class="container">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });

				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<div class="banner-info1">
								<div class="banner-inf">
									<h1>Selamat Datang</h1>
									<p>Dengan InvestNation anda bisa berinvestasi di bidang peternakan!</p>
									{{-- <div class="buy">
										<a href="single">Explore</a>
									</div> --}}
								</div>
							</div>
						</div>
					</li>
					{{-- <li>
						<div class="banner-info">
							<div class="banner-info1">
								<div class="banner-inf">
									<h1>asperiores alias consequatur aut perferendis</h1>
									<p>Alias earum rerum hic tenetur a sapiente delectus,
										ut aut reiciendis voluptatibus maiores alias consequatur
										aut perferendis doloribus asperiores repellat.</p>
									<div class="buy">
										<a href="single">Explore</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<div class="banner-info1">
								<div class="banner-inf">
									<h1>doloribus alias consequatur aut perferendis</h1>
									<p>Repellat earum rerum hic tenetur a sapiente delectus,
										ut aut reiciendis voluptatibus maiores alias consequatur
										aut perferendis doloribus asperiores repellat.</p>
									{{-- <div class="buy">
										<a href="single">Explore</a>
									</div>
								</div>
							</div>
						</div>
					{{-- </li> --}}
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- cate -->
	{{-- <div class="cate">
		<div class="container">
			<div class="cate-left">
				<h3>Necklaces<span>Our Catelog</span></h3>
			</div>
			<div class="cate-right">
				<!-- slider -->
				<ul id="flexiselDemo1">
					<li>
						<div class="sliderfig-grid">
							<img src="images/a.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="images/b.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="images/c.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="sliderfig-grid">
							<img src="images/d.jpg" alt=" " class="img-responsive" />
						</div>
					</li>
					</ul>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 3
										},
										landscape: {
											changePoint:640,
											visibleItems:4
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div> --}}
<!-- //slider -->
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //cate -->
<!-- cate-bottom -->
	{{-- <div class="cate-bottom">
		<div class="container">
			<div class="cate-bottom-info">
				<h3>New Collections</h3>
				<p>consequuntur magni dolores eos qui ratione voluptatem doloribus asperiores
				repellat molestiae non recusandae
				<span>perferendis doloribus asperiores repellat</span></p>
				<div class="buy let">
					<a href="single">Read More</a>
				</div>
			</div>
		</div>
	</div> --}}
<!-- //cate-bottom -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="welcome-info" style="padding-bottom: 5vh;">
				<h3>Welcome To Our Store!</h3>
				<p class="non">Repellat molestiae non recusandae<span>Asperiores repellat</span></p>
				<p class="rep">Perferendis doloribus asperiores repellat</p>
				<div class="buy wel">
					<a href="single">Read More</a>
				</div>
			</div>
		</div>
	</div>
<!-- //welcome -->
<!-- banner-bottom1 -->
	{{-- <div class="banner-bottom1">
		<div class="container">
			<div class="banner-bottom1-grids">
				<div class="banner-bot-grd">
					<div class="col-md-7 banner-bot-grid">
						<div class="jel-video">
							<iframe src="https://player.vimeo.com/video/45541146" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-5 banner-bot-grid">
						<div class="banner-bot-grid1">
							<img src="images/a3.jpg" alt=" " class="img responsive" />
							<div class="pos-absolt">
								<h3>omnis voluptas assumenda</h3>
								<p>Temporibus autem quibusdam et aut officiis debitis aut
								rerum necessitatibus saepe eveniet ut et voluptates.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>omnis voluptas assumenda</h3>
							<p>Temporibus autem quibusdam et aut officiis debitis aut
								rerum necessitatibus saepe eveniet ut et voluptates.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>omnis voluptas assumenda</h3>
							<p>Temporibus autem quibusdam et aut officiis debitis aut
								rerum necessitatibus saepe eveniet ut et voluptates.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom1-grid">
					<div class="banner-bottom1-grid1">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
						<div class="head-para">
							<h3>omnis voluptas assumenda</h3>
							<p>Temporibus autem quibusdam et aut officiis debitis aut
								rerum necessitatibus saepe eveniet ut et voluptates.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> --}}
<!-- //banner-bottom1 -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="clearfix"> </div>
		<div class="container">
			@php
				$pics = [
					'http://erakini.com/wp-content/uploads/2016/02/Pakan-Sapi-Limosin-150x150.jpg',
					'http://www.bebeja.com/wp-content/uploads/2013/02/bibit-lele-1-150x150.jpg',
					'http://agribisnis.co.id/wp-content/uploads/2016/03/ayam-3.jpg',
					'http://www.agrowindo.com/wp-content/uploads/2017/05/Peluang-Usaha-Ternak-Kambing-Etawa-Dan-Analisa-Usahanya-150x150.jpg',
					'http://mustang89.com/wp-content/uploads/2015/02/sapi-perah-150x150.jpg',
					'http://www.agrowindo.com/wp-content/uploads/2017/06/Peluang-Usaha-Budidaya-Sapi-Perah-Dan-Analisa-Usahanya-150x150.jpg',
					'http://kurbanbandung.com/wp-content/uploads/2015/08/sapi-perah-susu-150x150.jpg',
					'http://sisapi.lamongankab.go.id/wp-content/uploads/2017/03/1.7-150x150.jpg',
					'https://i2.wp.com/www.melawinews.com/wp-content/uploads/2016/09/sapi.jpg?resize=150%2C150',
					'http://qurbansapimurah.com/wp-content/uploads/2017/08/Sapi-PO7-150x150.jpg',
					'https://i2.wp.com/sapibagus.com/wp-content/uploads/2014/09/SAPI-LIMOUSIN-600KG-150x150.jpg',
					'http://www.cekjasa.com/wp-content/uploads/2017/07/sapi-qurban-medan-1-1-150x150.jpg'
				];


			@endphp
			@foreach ($pics as $key => $pic)
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
							<img src="{{$pic}}" alt="" class="img-responsive" style="margin-bottom: 0px;"/>
							<div class="mask">
								<span>Quick View</span>
							</div>
						</a>
						<p style="font-size:0.75em;padding-bottom:0em">Sapi Surabaya</p>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">{{rand( 1 , 10)}}%</span></a></p>
							</div>
							{{-- <div class="product-left-cart-r">
								<a href="#"> </a>
							</div> --}}
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			@endforeach
			{{-- <div class="product-one">
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
							<a href="single">
								<img src="images/1-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/3-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/2-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/4-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
							<a href="single">
								<img src="images/5-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/6-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
							<a href="single">
								<img src="images/7-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/13-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/9-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/10-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
							<a href="single">
								<img src="images/11-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2 product-left">
					<div class="p-one simpleCart_shelfItem jwe">
						<a href="single">
								<img src="images/12-.jpg" alt="" class="img-responsive" />
								<div class="mask">
									<span>Quick View</span>
								</div>
						</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p><a class="item_add" href="#"><i></i> <span class=" item_price">$729</span></a></p>
							</div>
							<div class="product-left-cart-r">
								<a href="#"> </a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> --}}
		</div>
	</div>
	@endsection
