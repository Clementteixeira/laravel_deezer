<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TOP FRANCE</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/topfrance.css')}}">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Questrial&display=swap');
	</style>

</head>
<body>
	<section>
		<div class="leftBloc">
			<h2>Catégories</h2>
			<a href="http://127.0.0.1:8000/artist"><p>Artiste (TOP 5)</p></a>
            <a href="http://127.0.0.1:8000/topfrance"><p class="selected">Top 10 Titres France</p></a>
            <a href="http://127.0.0.1:8000/topalbum"><p>Top 10 Album </p></a>
            <a href="http://127.0.0.1:8000/track">
            <p >Vos paroles préférés</p>  </a>
		</div>

		<div class="rightBloc">
			<h1> TOP 10 Titres FRANCE </h1>


			@foreach($top->tracks->data as $thetop)
			<div class="theSong">
				<div class="player">
					<audio controls>
						<source src="{{ $thetop-> preview }}"></source>
					</audio>
				</div>
				<div class="artist-title">
					<h2> {{ $thetop -> title }} </h2>
					<h3>{{ $thetop-> artist -> name }}</h3>
					
					
				</div>
				<div class="cover">
					<img src="{{ $thetop -> album -> cover_medium }}" >
				</div>
			</div>
			@endforeach 
		</div>







	</section>
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/artistid.js')}}"></script>
</body>
</html>
