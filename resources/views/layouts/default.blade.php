<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRRUD LARAVEL</title>

	@stack('before-style')
	@include('includes.style')
	@stack('after-style')
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			@stack('before-content')
			@yield('content')
			@stack('after-content')
		</div>
	</div>
	@stack('before-script')
	@include('includes.script')
	@stack('after-script')
</body>
</html>