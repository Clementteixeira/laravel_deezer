<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topfrance extends Controller
{
public function index(){
		return view('topfrance');

	}

	public function artist(){
		$curl = curl_init();
		
		if (empty($_GET['artist_id'])) {
				$_GET['artist_id'] = "4050205";
			} else {
				$artist_id = $_GET['artist_id'];
			}
		curl_setopt_array($curl, array(
			
			CURLOPT_URL => "https://api.deezer.com/artist/".$_GET['artist_id']."/",
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



		$curl2 = curl_init();

		curl_setopt_array($curl2, array(
		  CURLOPT_URL => "https://api.deezer.com/artist/".$_GET['artist_id']."/top",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_COOKIE => "dzr_uniq_id=dzr_uniq_id_fr52e28c1d0a3b85999ae0b0d02b089f39e858e3",
		));

		$response2 = curl_exec($curl2);
		$err2 = curl_error($curl2);

		curl_close($curl2);


		if ($err2) {
			echo "cURL Error #:" . $err2;
		} else if($err){
			echo "cURL Error #:" . $err;
		}else{
			//echo $response;
			//dd(json_decode($response2));

			return view('artist', [
				'artistes' => json_decode($response),
				'topfive' => json_decode($response2)]); 

		}
		//dd(json_decode($response));

	}
}

