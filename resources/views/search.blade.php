<!DOCTYPE html>
<html>
<head>
	<title>Find</title>
</head>
<body>
<div class="container">
	@foreach($find as $finds)
	
	<h4>Event Name:<i style="color: blue;">   {{ $finds->title }}</i></h4>
	<h4>Event Start Date with Time: <i style="color: red;">   {{ $finds->start_date }}</i></h4>
	<h4>Event End Date with Time:<i style="color: green;">    {{ $finds->end_date }}</i></h4>
	{{-- <form method="POST" action="/delete/{{ $finds->id }}">
		 <input class="btn btn-default" type="submit" value="Delete" />
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		
	</form> --}}
	<hr>
	<br>
	

	@endforeach
</body>
</html>