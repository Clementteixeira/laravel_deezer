<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TOP FRANCE</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/topfrance.css')}}">
    <link rel="stylesheet" href="{{asset('css/favoritetracks.scss')}}">
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
            <a href="http://127.0.0.1:8000/topalbum"><p>Top 10 Album </p></a>
            <a href="http://127.0.0.1:8000/track">
            <p class="selected">Vos paroles préférés</p>  </a>
        </div>

        <div class="rightBloc">
            <div class="content">
                <h1> Vos paroles de chanons préférés ! </h1>
                <h2> Entres tes paroles favorites</h2>
                <form action="{{ route('favtracks-insert') }}" method="post">
                    @csrf
                    <input type="text" name="artist" placeholder="Artiste">
                    <input type="text" name="song" placeholder="Chanson">
                    <input type="text" name="lyrics" placeholder="Paroles">
                    <button>Ajouter</button>
                </form>
                <div class="favlist">
                    @foreach($favorite_tracks as $test)
                    <div class="favsong" data-id="{{ $test->id }}">
                        <div>
                            <p>{{ $test->artist }}</p>
                        </div>
                        <div>
                            <p>{{ $test->song }}</p>
                        </div>
                        <div>
                            <p>{{ $test->lyrics }}</p>
                        </div>
                          <form action="{{ route('favtracks-update') }}" method="get">
                        @csrf
                        <input type="hidden" name="track_id" value="{{ $test->id }}">
                       <button>modifier</button>
                        </form>

                        <form action="{{ route('favtracks-delete') }}" method="get">
                        @csrf
                        <input type="hidden" name="track_id" value="{{ $test->id }}">
                       <button>supprimer</button>
                        </form>

                       

                    </div>
                    @endforeach
                    <p> Tu t'es trompé ? Entres les bons éléments et clique sur "Modifier" pour les mettre à jour ! </p>
                    <form action="{{ route('favtracks-update') }}" method="post">
                        @csrf
                        <input type="text" name="edit_artist" placeholder="Artiste">
                        <input type="text" name="edit_song" placeholder="Chanson">
                        <input type="text" name="edit_lyrics" placeholder="Paroles">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/favtracks.js')}}"></script>
</body>
</html>
