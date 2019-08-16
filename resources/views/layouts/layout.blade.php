<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery-3.2.1.slim.min.js')}}" ></script>
    <script src="{{asset('/js/poppers.min.js')}}" ></script>
</head>
<body>

	<div class="container-fluid" style="margin-top: 100px">

		@yield('content')
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;

	}
</style>
</body>
</html>