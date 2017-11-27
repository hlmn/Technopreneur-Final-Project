@extends('layouts.layout')
<!---->
<!-- single-page -->
@section('content')
<div class="single">
<div class="container">
	<div class="single-page">
		<div class="flexslider details-lft-inf">
			<ul class="slides">
				<li data-thumb="http://www.cangcut.net/wp-content/uploads/2013/03/dul-sapi-seharga-165-juta-1024x1024.jpg">
					<img src="http://www.cangcut.net/wp-content/uploads/2013/03/dul-sapi-seharga-165-juta-1024x1024.jpg" />
				</li>
				<li data-thumb="http://www.gurupendidikan.co.id/wp-content/uploads/2016/09/sapi-1024x1024.png">
					<img src="http://www.gurupendidikan.co.id/wp-content/uploads/2016/09/sapi-1024x1024.png" />
				</li>
				<li data-thumb="http://www.cangcut.net/wp-content/uploads/2013/03/sapi-simental_f-6172-11759-1024x1024.jpg">
					<img src="http://www.cangcut.net/wp-content/uploads/2013/03/sapi-simental_f-6172-11759-1024x1024.jpg" />
				</li>
				<li data-thumb="http://www.riauandalas.com/wp-content/uploads/2016/09/sapi-sahiwal-foto-gambar-sapi-lengkap-usahaternak-1024x1024.jpg">
					<img src="http://www.riauandalas.com/wp-content/uploads/2016/09/sapi-sahiwal-foto-gambar-sapi-lengkap-usahaternak-1024x1024.jpg" />
				</li>
			</ul>
		</div>
			<!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

				<script>
			// Can also be used with $(document).ready()
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			  });
			});
			</script>
		<div class="details-left-info">
			<h3>sapi surabaya</h3>
				<h4>Surabaya</h4>
			<div class="simpleCart_shelfItem">
				<p><span class="item_price qwe">10%</span> <a href="#">Profit</a></p>
				<form action={{route('checkout')}} method="get">
				<p class="qty">Investasi ::</p><input min="10000" id="quantity" name="quantity"  class="form-control" style="width:50%;padding: 10px 6px 8px;text-align:left;"><p id="rupiah"> Rp. 0</p>
				<div class="single-but item_add">
					<input type="submit" value="Investasi Sekarang!">
				</div></form>
			</div>
			<div class="flower-type">
			{{-- <p>Model  ::</p>
			<p>Carrets  ::<a href="#">22</a></p> --}}
			<p>Timeline proyek investasi  ::<a href="#">06 Dec 2017 - 16 Mar 2018</a></p>
			{{-- <hr> --}}

				<p>Pendanaan saat ini ::<a href="#">Rp. 3.125.000</a></p>
				<p>Kebutuhan Dana ::<a href="#">Rp. 10.000.000</a></p>
				<p>Sisa Waktu ::<a href="#">13 hari</a></p>
				<p>Investor saat ini ::<a href="#">12</a></p>
			</div>
			<p class="desc">Proin vestibulum scelerisque tempus. Phasellus at fermentum erat. Pellentesque mattis velit eget elit condimentum gravida. Donec vehicula mollis velit, a eleifend est hendrerit quis. Etiam pulvinar at ex eget cursus. Etiam luctus orci ut tortor rhoncus, sit amet faucibus lorem finibus. Nulla id ornare arcu. or lowest node and working upwards) are as follows:</p>
		</div>
		<div class="clearfix"></div>
	</div>

<hr>
	<div class="related-products">
		<h3>Related Products</h3>
		<div class="col-md-4 related products-grid">
			<img src="http://5.imimg.com/data5/CK/NL/MY-28556903/breed-cow-500x500.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="item_price val">10%</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="https://wallpaperscraft.com/image/cow_head_nose_meadow_grass_sky_16958_300x400.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="item_price val">5%</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="http://1.bp.blogspot.com/_W19ZkFqGT-M/SW8Snq0JgZI/AAAAAAAAAtc/mUHIp3mGyqs/s400/Obese+cow+.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="item_price val">8%</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //related products -->
</div>
</div>
<!-- single -->
<!-- footer -->

@endsection
@section('js')
<script type="text/javascript">
function convertToRupiah(angka)
{
	var rupiah = '';		
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

$(document).ready(function(){
	$('#quantity').on('keyup', function(){
		$('#rupiah').html(convertToRupiah($(this).val()));
	});
});
</script>
@endsection