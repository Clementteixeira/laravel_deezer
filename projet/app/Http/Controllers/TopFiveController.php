<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopFiveController extends Controller
{
	public function index(){
		return view('artistv2');
	}

	public function topfive(){
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.deezer.com/artist/4050205/top",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_POSTFIELDS => "",
	  CURLOPT_COOKIE => "dzr_uniq_id=dzr_uniq_id_fr52e28c1d0a3b85999ae0b0d02b089f39e858e3",
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
		//dd(json_decode($response));

	  //dd(json_decode($response));


	  return view('artistv2', [
				'topfive' => json_decode($response)] );
	}
}
}
