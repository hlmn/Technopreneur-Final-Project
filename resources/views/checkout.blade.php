@extends('layouts.layout')
<!---->
<!-- check-out -->
@section('content')
<div class="container">
	<div class="check">	 
		<div class="col-md-3 cart-total">
			{{-- <a class="continue" href="#">Lanjut Ke Pembayaran</a> --}}
				
			<ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span class="rupiah">{{$requestData['quantity']}}</span></li>
			   <div class="clearfix"> </div>
			</ul> 
			<div class="clearfix"></div>
			<a class="order" href="#">Lanjut Ke Pembayaran</a>
			{{-- <div class="total-item">
				<h3>OPTIONS</h3>
				<h4>COUPONS</h4>
				<a class="cpns" href="#">Apply Coupons</a>
			</div> --}}
		</div>
		<div class="col-md-9 cart-items">
			<h1>My Shopping Bag (2)</h1>
				{{-- <script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
 --}}			<div class="cart-header">
				<div class="close1"> </div>
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="http://www.cangcut.net/wp-content/uploads/2013/03/dul-sapi-seharga-165-juta-1024x1024.jpg" class="img-responsive" alt=""/>
						</div>
						<p>Sapi Surabaya</p>
						<div class="cart-item-info">
							<ul class="qty">
								<li><p>Proyeksi Keuntungan : 5%</p></li>
								<li><p>Timeline proyek investasi  ::<a href="#">06 Dec 2017 - 16 Mar 2018</a></p></li>
							</ul>
							<div class="delivery">
								{{-- {{dd($requestData)}} --}}
								 <p>Service Charges : <span class="rupiah">{{$requestData['quantity']}}</span></p>
								 {{-- <span>Delivered in 2-3 bussiness days</span> --}}
								 <div class="clearfix"></div>
							</div>	
							{{-- <div class="fgh">
								<a href="#">Add To Cart</a>
							</div> --}}
						</div>
						<div class="clearfix"></div>
											
				  </div>
			 </div>
			 {{-- <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			<div class="cart-header2">
				<div class="close2"> </div>
					<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/13.jpg" class="img-responsive" alt=""/>
						</div>
					    <div class="cart-item-info">
							<ul class="qty">
								<li><p>Size : 5</p></li>
								<li><p>Qty : 1</p></li>
							</ul>
							<div class="delivery">
								<p>Service Charges : Rs.100.00</p>
								<span>Delivered in 2-3 bussiness days</span>
								<div class="clearfix"></div>
							</div>	
							<div class="fgh">
								<a href="#">Add To Cart</a>
							</div>
					   </div>
					   <div class="clearfix"></div>					
				    </div>
			</div>		 --}}
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
@endsection