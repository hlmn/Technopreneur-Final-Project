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
				{{-- <a class="order" href="#">Konfirmasi</a> --}}
			</div>
			<div class="col-md-9">
				<h1>Metode Pembayaran</h1>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
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
						<form action="{{route('profile')}}" method="get" class="form-horizontal">
							<input type="hidden" name="quantity" value="{{$requestData['quantity']}}">
							<div class="form-group">
								<label class="col-sm-4 control-label">Upload Bukti</label>
								<div class="col-md-8">
									<input type="file" name="file">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Bank asal</label>
								<div class="col-md-8">
									<input type="text" name="bank_asal" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Rekening asal</label>
								<div class="col-md-8">
									<input type="text" name="rekening_asal" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Rekening asal</label>
								<div class="col-md-8">
									<input type="text" name="nama_rekening_asal" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Jumlah Transfer</label>
								<div class="col-md-8">
									<input type="text" name="jumlah" class="form-control">
								</div>
							</div>
							<div class="form-group">
							    <div class="col-sm-offset-4 col-sm-8">
							      <button type="submit" class="btn btn-default">Konfirmasi</button>
							    </div>
							 </div>
						</form>
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