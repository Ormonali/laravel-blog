<!DOCTYPE html>
<html>
<head>
	<title>Блог</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">OrmonaliDev.kg</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
	<div class="content">
		@yield('content')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
