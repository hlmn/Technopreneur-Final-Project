@extends('layouts.layout');

@section('content')
<div class="container" style="min-height: 100%;margin-top: 2%">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default" style="text-align:center">
				<div class="panel-body">
					<h2>Tentang Kami</h2><br>
					<p>Pengelolaan yang masih tradisional itu diakibatkan oleh paradigma peternak yang memandang bahwa peternakan merupakan usaha sampingan atau sekadar investasi jangka pendek. Sehingga bukan tak mungkin peternakan itu berjalan tanpa perencanaan.</p>
				</div>
			</div>
			<div class="panel panel-default" style="text-align:center" ">
				<div class="panel-body" style="background-image: url('images/peternak.jpg')">
					<img src="{{url('images/peternak.jpg')}}">
				</div>
			</div>
			<div class="panel panel-default" style="text-align:center">
				<div class="panel-body">
					<h2>Kenapa InvestNation?</h2><br>
					<p>Investasi disini lebih menguntungkan daripada di bank konvensional. InvestNation juga bertujuan membantu para peternak Indonesia dalam menjalankan bisnis tanpa harus memikirkan keterbatasan lokasi dan waktu.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection