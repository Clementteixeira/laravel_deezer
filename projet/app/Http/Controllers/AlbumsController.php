<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
	public function index()
	{
	    $my = \App\Album::all();
        return view('album', ['my' => $my]);
	}

	public function insert(Request $request){
		$Album = new Album;
		$Album->title = $request->input('title');
	    $Album->duration = $request->input('hour');
	    $Album->save();
	}

	public function update(){
		$Album = \App\Album::find(1);
		$Album->duration = "2h";
		$Album->save();
		//dd($Album);
	}

	public function delete(){
		$Album = \App\Album::find(2);
		$Album->delete();
	}

}
