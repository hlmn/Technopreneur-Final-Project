@extends('layouts.layout')

@section('style')
<style type="text/css">
a.order{
	margin:0.8em 0;	
}	
.modal-footer{
	border-top:0;
}
</style>

@endsection
<!---->
<!-- check-out -->
@section('content')
<div class="container">
	<div class="check">
		<div class="row">
			<div class="col-md-3">
				<img style="width: 100%xz" src="{{url('images/hugh.jpg')}}" class="img-responsive"> 
				<div class="clearfix"></div>
				<a style="width: 100%" class="order" href="{{route('konfirmasi', ['quantity' => $requestData['quantity']])}}">Konfirmasi</a>
				<a style="width: 100%" class="order" href="">Status Proyek</a>
				<a style="width: 100%" class="order" href="">Pengaturan</a>
				<a style="width: 100%;background: #008000b5" class="order" href="#"  data-toggle="modal" data-target="#myModal">Ambil Dana</a>
				
			</div>
			
			<div class="col-md-9">
				<h3>Selamat Datang,</h3>
				<h1><b>Technopreneurship</b></h1>
				<hr>
			<div class="" id="ubah">	
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">	
									<h3>INVESTASI KAMU</h3><hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6" style="text-align:center">
								<img src="{{url('images/project.png')}}" style="width: 50%;height: 50%">	
									<h4 style="color: brown">60 Proyek</h4>
								</div>
								<div class="col-md-6" style="text-align: center">
								<img src="{{url('images/money.png')}}" style="width: 50%;height: 50%">	
									<h4 style="color: brown">Rp150.000.000</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">	
									<h3>RIWAYAT INVESTASI</h3><hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4" style="text-align: center">	
									<h2>Rp0,-</h2>
									<h4 style="color: brown">Active Wallet</h4>
								</div>
								<div class="col-md-4" style="text-align: center">	
									<h2>Rp0,-</h2>
									<h4 style="color: brown">Ekspektasi Profit</h4>
								</div>
								<div class="col-md-4" style="text-align: center">	
									<h2>Rp0,-</h2>
									<h4 style="color: brown">Total Realisasi Profit</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4" style="text-align: center">	
									<h2>Rp0,-</h2>
									<h4 style="color: brown">Voucher Wallet</h4>
								</div>
								<div class="col-md-4" style="text-align: center">	
									<h2>0</h2>
									<h4 style="color: brown">Total Proyek Investasi</h4>
								</div>
								<div class="col-md-4" style="text-align: center">	
									<h2>0%</h2>
									<h4 style="color: brown">ROI</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="background: #daa88040">
        <p><i>Wallet kamu</i></p> <br>
        <h2 style="text-align: center">Rp1.000.000</h2>
      </div>
      <div class="modal-footer" style="background: #daa88040">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Ambil</button>
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
<script type="text/javascript">
// 	$('#ambildana').on('shown.bs.modal', function () {
//   $('#myInput').focus()
// })
</script>
@endsection