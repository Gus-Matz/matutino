<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

	<!-- primera parte de cargas de archivos (CSS) -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/plugins/fontawesome/css/all.min.css')}}">
	
	<style type="text/css">
		.table {
			border-top: 2px solid #ccc;

		}
	</style>

</head>
<body>
	@include('layouts.navbar')
	<div class="container-fluid" style="margin-top: 70px">
		<div class="row">
			<div class="card mx-auto col-sm-12 col-md-8 col-lg-7">
				<h5 class="card-header">@yield('titulo')</h5>
				<div class="card-body">
				@yield('content')
				</div>
			</div>
		</div>
	</div>
	
	<!-- segunda parte de cargas de archivos (JS) -->
    <script src="{{asset('/js/jquery-3.2.1.slim.min.js')}}" ></script>
    <script src="{{asset('/js/popper.min.js')}}" ></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/plugins/fontawesome/js/all.min.js')}}"></script>
</body>
</html>