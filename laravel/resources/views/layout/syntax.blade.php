<!DOCTYPE html>
<html lang="en">
<head>
	<title> {{ $title }} </title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- links. -->
	{!! Html::style('bootstrap/css/bootstrap.css') !!}
	
	<!-- agency -->
	{!! Html::style('bootstrap/css/agency.css') !!}
		
	<!-- font-awesome -->
	{!! Html::style('font-awesome/css/font-awesome.min.css') !!}

	<!-- lightbox -->
	{!! Html::style('lightbox/dist/css/lightbox.css') !!}	
	
</head>
<body>


	<!-- global.. -->
	<div style="background-color:#f7f7f7; margin-top:40px">
		<!-- lets do a session to be used throught our auth app. -->
		@if(Session::has('global'))
			<p> {!! Session::get('global') !!} </p>
		@endif	
	</div>

	<!-- fork -->	
	@yield('content') 
	


	<!-- jquery -->
	{!! Html::script('bootstrap/js/jquery-1.11.1.min.js') !!}
	
	<!-- bootstrap -->
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}

	<!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<!-- Agency js -->
	{!! Html::script('bootstrap/js/agency.js') !!}

	<!-- Animated header -->
	{!! Html::script('bootstrap/js/cbpAnimatedHeader.js') !!}

	<!-- Classie -->
	{!! Html::script('bootstrap/js/classie.js') !!}

	<!-- lightbox -->
	{!! Html::script('lightbox/dist/js/lightbox.min.js') !!}
		
</body>
</html>