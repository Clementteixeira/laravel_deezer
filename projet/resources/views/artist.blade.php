<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Artist</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Questrial&display=swap');
	</style>

</head>
<body>
	<section>
		<div class="leftBloc">
			<h2>Catégories</h2>
			<a href="http://127.0.0.1:8000/artist"><p class="selected">Artiste (TOP 5)</p></a>
            <a href="http://127.0.0.1:8000/topfrance"><p>Top 10 Titres France</p></a>
            <a href="http://127.0.0.1:8000/topalbum"><p>Top 10 Album </p></a>
            <a href="http://127.0.0.1:8000/track">
            <p>Vos paroles préférés</p>  </a>
		</div>

		<div class="rightBloc">
			<div class="randomBloc">
				<p> Clique ici pour découvrir un artiste ! <p>
			</div>

			<div class="content" data-id="4050205">
				<div class="artist">
					<div class="flex leftFlex">
						<img src="{{$artistes->picture_big}}">
					</div>
					<div class="flex">
						<h2>{{ $artistes->name }}</h2>
						<div class="fans_flex">
							<h3>{{ $artistes-> nb_fan }}</h3>
							<h3>  fans </h3>
						</div>
						@foreach($topfive->data as $thetop)
						<div class="grid-container">
							<div class="playButton"><audio controls>
								<source src="{{ $thetop-> preview }}"></source>
							</audio></div>
							<div class="trackNumber">1</div>
							<div class="trackTitle">{{ $thetop->title }}</div>
							<div class="trackTime">{{ $thetop->duration }}</div>
						</div>
						<hr>
						@endforeach
					</div>
				</div>
				<div class="hideId" data-id="1194083" id="hideId">
				</div>
			</div>

			
			

		</div>

		


	</section>
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/artistid.js')}}"></script>
</body>
</html>
