<!DOCTYPE html>
<html lang="en">
<head>
	<title> {{ $title }} </title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- links. -->
	{!! Html::style('bootstrap/css/bootstrap.css') !!}	
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

		
</body>
</html>