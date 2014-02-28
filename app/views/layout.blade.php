<html>
	<head>
		<title>Laravel</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Laravel</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="/">Home</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					
					
					</div>


					<!-- <ul class="nav navbar-nav">
						<li class="active"><a href="./">Home</a></li>
						<li><a href="./about">About</a></li>
						<li><a href="./contact">Contact</a></li>
					</ul>
				</div> -->
			</nav>
			
		<header>
		@yield('content')

		<div class="bottom-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2 navbar-brand">
						<a href="/">Learning Laravel</a>
					</div>
					<div class="col-md-10">
						<ul class="bottom-links">
							<li>
								<a href="/">Home</a>
							</li>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</body>

</html>