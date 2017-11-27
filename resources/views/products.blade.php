@extends('layouts.layout')
@section('content')
<!---->
<!-- products -->
@php

	$pics = [
		'http://www.situslivecasino.online/wp-content/uploads/2016/11/sapi-Ayrshire-150x150.jpg',
		'http://kahaba.net/wp-content/uploads/2012/10/sapi-edit-150x150.jpg',
		'https://pecintasatwa.com/wp-content/uploads/2014/12/pedet-hasil-silangan-simenthal-dgn-sapi-lokal-150x150.jpg',
		'http://rahasiasemesta.com/alambawahsadar/wp-content/uploads/2014/10/sapi-australia-150x150.jpg',
		'http://i3expo.id/2017/wp-content/uploads/2017/09/10-sapi-3-150x150.jpg',
		'http://www.sapiqurban.info/wp-content/uploads/2016/02/ID-660-150x150.jpg',


	];
	$picsCollection = collect($pics);
	// dd($picsCollection);
@endphp
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-grid-left">
					@foreach ($picsCollection->chunk(3) as $key => $pics)
						<div class="products-grid-lft">
							@foreach ($pics as $index => $value)
								<div class="products-grd">
									<div class="p-one simpleCart_shelfItem prd">
										<a href="single">
												<img src="{{$value}}" alt="" class="img-responsive" />
												<div class="mask">
													<span>Quick View</span>
												</div>
										</a>
										<h4>Aenean placerat</h4>
										<p style="font-size:0.75em;padding-bottom:0em">Periode Investasi: 110 hari</p>
										<p style="font-size:0.75em;padding-bottom:0em">Lokasi: Surabaya</p><br>
										<p style="font-size:0.75em;padding-bottom:0em">Sisa waktu: 10 hari lagi</p>
										<br>
										<p><a class="item_add" href="#"><span class=" item_price valsa">Profit {{rand( 1 , 10)}}%</span></a></p>
										{{-- <div class="pro-grd">
											<a href="single">10% Off</a>
										</div> --}}
									</div>
								</div>
							@endforeach
							<div class="clearfix"> </div>
						</div>
					@endforeach

				</div>
				<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<h4>All</h4>
							<ul>
								<li><a href="women.html">Daging</a></li>
								<li><a href="#">Susu</a></li>
								{{-- <li><a href="#">trends</a></li>
								<li><a href="#">boys</a></li>
								<li><a href="#">girls</a></li>
								<li><a href="#">sale</a></li> --}}
							</ul>
						</div>
						<section  class="sky-form">
							<h4>lokasi</h4>
							<div class="row1 scroll-pane">
								{{-- <div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Necklaces</label>
								</div> --}}
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" checked name="checkbox"><i></i>Jakarta</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bandung</label>

								</div>
							</div>
						</section>
						{{-- <section  class="sky-form">
							<h4>brand</h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>assumenda est</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								</div>
							</div>
						</section> --}}
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //products -->
<!-- footer -->
@endsection
