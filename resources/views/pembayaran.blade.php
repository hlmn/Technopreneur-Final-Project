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
				   <li class="last_price"><span class="rupiah">{{$requestData['quantity']}}</span></li>
				   <div class="clearfix"> </div>
				</ul> 
				<div class="clearfix"></div>
				<a class="order" href="{{route('konfirmasi', ['quantity' => $requestData['quantity']])}}">Konfirmasi</a>
			</div>
			<div class="col-md-9">
				<h1>Metode Pembayaran</h1>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1">
								<input type="radio" name="ea">
							</div>
							<div class="col-md-2">
								<img src="https://image.cermati.com/v1428073854/brands/avqoa9rfng8bklutfhm6.jpg" height="25">
							</div>
							<div class="col-md-6">
								PT. InvestNation
							</div>
							<div class="col-md-3">
								2142343243423
							</div>
						</div>
						<hr>	
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1">
								<input type="radio" name="ea">
							</div>
							<div class="col-md-2">
								<img src="https://image.cermati.com/v1428073852/brands/w9jhdqshtzoijyuvqixk.png" height="25">
							</div>
							<div class="col-md-6">
								PT. InvestNation
							</div>
							<div class="col-md-3">
								432423423234
							</div>
						</div>
						<hr>	
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1">
								<input type="radio" name="ea">
							</div>
							<div class="col-md-2">
								<img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/BankNegaraIndonesia46-logo.svg/1200px-BankNegaraIndonesia46-logo.svg.png" height="25">
							</div>
							<div class="col-md-6">
								PT. InvestNation
							</div>
							<div class="col-md-3">
								75676575675
							</div>
						</div>
						<hr>	
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1">
								<input type="radio" name="ea">
							</div>
							<div class="col-md-2">
								<img src="http://pressrelease.id/uploads/release/logo_BRI.png" height="25">
							</div>
							<div class="col-md-6">
								PT. InvestNation
							</div>
							<div class="col-md-3">
								34242343242221
							</div>
						</div>
						<hr>	
					</div>
					
					

				</div>
			</div>
		</div>
	</div>
</div>
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
		var total = {{$requestData['quantity']}};
		$('.rupiah').html(convertToRupiah(total));
	});
</script>
@endsection