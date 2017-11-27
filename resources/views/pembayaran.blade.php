@extends('layouts.layout')
<!---->
<!-- check-out -->
@section('content')
<div class="container">
	<div class="check">
		<div class="row">
			<div class="col-md-3">
				<ul class="total_price">
				   <li class="last_price"> <h4>TOTAL</h4></li>	
				   <li class="last_price"><span class="rupiah">{{-- {{$requestData['quantity']}} --}}a321321</span></li>
				   <div class="clearfix"> </div>
				</ul> 
				<div class="clearfix"></div>
				<a class="order" href="#">Lanjut Ke Pembayaran</a>
			</div>
			<div class="col-md-9">
				<h1>Metode Pembayaran</h1>
				<div class="row">
					<div class="col-md-12"></div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection