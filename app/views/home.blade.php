@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">
		
	</div>
	<div class="container">
		<div class="header-text">
			<h1>Belajar Laravel!</h1>
			<p>
				Cara Cepat belajar!
			</p>
		</div>
	</div>
</section>

<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>
				<span class="grey">WELCOME TO</span>
				LARAVEL!
			</h1>
			<p>
				Best Place to Learn!
			</p>
		</div>

		<div class="jumbotron text-center">
			<div class="row">
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
						<img src="{{ asset('img/icon1.png') }}" alt="">
						<p>
							Most Comprehensive
						</p>
					</div>	
				</div>
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
						<img src="{{ asset('img/icon2.png') }}" alt="">
						<p>
							Much Complete
						</p>
					</div>	
				</div>
				<div class="showcase-box col-md-4">
					<div class="showcase-item">
						<img src="{{asset('img/icon3.png') }}" alt="">
						<p>
							So Laravel
						</p>
					</div>	
				</div>
			</div>
		</div>
	</section>
</div>

@stop
