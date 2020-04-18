<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracks;

class FavSongController extends Controller
{
    public function index()
	{
	    $favorite_tracks = \App\Tracks::all();
        return view('tracks', ['favorite_tracks' => $favorite_tracks]);
	}

	public function insert(Request $request){
		$tr = new Tracks;
		$tr->artist = $request->input('artist');
	    $tr->song = $request->input('song');
	    $tr->lyrics = $request->input('lyrics');
	    $tr->save();
	}

	public function update(Request $request){
		$id = $request->input('track_id');
		$tr = \App\Tracks::find($id);
		$tr->artist = $request->input('edit_artist');
		$tr->song = $request->input('edit_song');
		$tr->lyrics = $request->input('edit_lyrics');
		$tr->save();
	}

	

	public function delete(Request $request){
		//var_dump($this);
		//echo mysql_fetch_row($this);
		//$id = $_POST['id'];
		$id = $request->input('track_id');

		$tr = \App\Tracks::find($id);
		$tr->delete();
	}
}

?>
