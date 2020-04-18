<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TOP FRANCE</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/topfrance.css')}}">
	<link rel="stylesheet" href="{{asset('css/topalbum.css')}}">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Questrial&display=swap');
	</style>

</head>
<body>
	<section>
		<div class="leftBloc">
			<h2>Catégories</h2>
			<a href="http://127.0.0.1:8000/artist"><p>Artiste (TOP 5)</p></a>
            <a href="http://127.0.0.1:8000/topfrance"><p>Top 10 Titres France</p></a>
            <a href="http://127.0.0.1:8000/topalbum"><p class="selected">Top 10 Album </p></a>
            <a href="http://127.0.0.1:8000/track">
            <p >Vos paroles préférés</p>  </a>
		</div>

		<div class="rightBloc">
			<h1> TOP 10 Albums FRANCE </h1>
			<div class="selectedAlbum" id="album">
				<div class="content">
					<p class="return">return</p>
					<div class="artist">
						<div class="flex leftFlex">
							<img src="{{asset('img/dp.jpg')}}" alt="loupe">
						</div>
						<div class="flex">
							<h2>Nom de l'album</h2>
							<h3>Nom de l'artiste</h3>
						</div>
					</div>

							@foreach($songs->tracks->data as $song)
							<div class="grid-container">
								<div class="playButton"><audio controls>
									<source src="{{ $song-> preview }}"></source>
								</audio></div>
								<div class="trackNumber">1</div>
								<div class="trackTitle">{{ $song-> title }}</div>
								<div class="trackTime">{{ $song-> duration }}</div>
							</div><hr>
								@endforeach
							
							
				</div>
			</div>

			<div class="topAlbum">
				@foreach($album->data as $thetop)
				<div class="theSong" data-id="{{$thetop->id}}">
						<div class="player">
							{{ $thetop-> position }}
						</div>
						<div class="artist-title" data-id="{{$thetop->id}}">
							<h2> {{ $thetop -> title }} </h2>
							<h3>{{ $thetop-> artist -> name }}</h3>
							
							
						</div>
						<div class="cover">
							<img src="{{ $thetop -> cover_medium }}" >
						</div>
					</div>
					@endforeach 
					</div>
				</div>







	</section>
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/topalbum.js')}}"></script>
	<script src="{{asset('js/artistid.js')}}"></script>
</body>
</html>
