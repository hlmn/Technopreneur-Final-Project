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
				{{-- <div class="col-rad">
					<div class="col-rad-left">
						<select class="arrival">
							<option>Color</option>
							<option>Green</option>
							<option>Violet</option>
							<option>Pink</option>
						</select>
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="radio" checked=""><i></i>14Kt</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio"><i></i>10Kt</label>
								</div>
							</div>
						</section>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-rad tyy">
					<div class="col-rad-left">
						<p>Diamond</p>
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="radio1" checked=""><i></i>SI GH</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio1"><i></i>VS GH</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="radio1"><i></i>VVS EF</label>
								</div>
							</div>
						</section>
					</div>
					<div class="clearfix"> </div>
				</div> --}}
				<p class="qty">Jumlah ::</p><input min="10000" id="quantity" name="quantity" value="1" class="form-control" style="width:50%;padding: 10px 6px 8px;text-align:left;">
				<div class="single-but item_add">
					<input type="submit" value="Investasi Sekarang!">
				</div>
			</div>
			<div class="flower-type">
			{{-- <p>Model  ::</p>
			<p>Carrets  ::<a href="#">22</a></p> --}}
			<p>Timeline proyek investasi  ::<a href="#">06 Dec 2017 - 16 Mar 2018</a></p>
			<hr>

				<p>Pendanaan saat ini ::<a href="#">Rp. 3.125.000</a></p>
				<p>Kebutuhan Dana ::<a href="#">Rp. 10.000.000</a></p>
				<p>Sisa Waktu ::<a href="#">13 hari</a></p>
				<p>Investor saat ini ::<a href="#">12</a></p>
			</div>
			<p class="desc">Proin vestibulum scelerisque tempus. Phasellus at fermentum erat. Pellentesque mattis velit eget elit condimentum gravida. Donec vehicula mollis velit, a eleifend est hendrerit quis. Etiam pulvinar at ex eget cursus. Etiam luctus orci ut tortor rhoncus, sit amet faucibus lorem finibus. Nulla id ornare arcu. or lowest node and working upwards) are as follows:</p>
		</div>
		<div class="clearfix"></div>
	</div>

<!-- collapse -->
{{-- <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Description
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           additional information
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          reviwes(5)
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          help
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div> --}}
<!-- collapse -->
<!-- related products -->
<hr>
	<div class="related-products">
		<h3>Related Products</h3>
		<div class="col-md-4 related products-grid">
			<img src="images/19.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="images/18.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="col-md-4 related products-grid">
			<img src="images/20.jpg" alt=" " class="img-responsive" />
			<div class="simpleCart_shelfItem rel">
				<p><span class="overline">$ 1000</span> <span class="item_price val">$ 729</span></p>
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
