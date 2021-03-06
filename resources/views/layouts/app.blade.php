<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title', 'Laravel Shop') shop</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
	<div id="app" class="{{ route_class() }}-page">
		@include('layouts._header')
		<div class="container">
			@yield('content')
		</div>
		@include('layouts._footer')
	</div>
	<script src="{{ mix('js/app.js') }}"></script>
	@yield('scriptsAfterJs')
</body>
</html>