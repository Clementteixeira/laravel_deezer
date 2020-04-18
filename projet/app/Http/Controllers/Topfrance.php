<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topfrance extends Controller
{

    public function index(){
        return view('topfrance');

    }

    public function topfrance(){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.deezer.com/chart/0",
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
  //echo $response;
}
            //echo $response;
            //dd(json_decode($response));
        //var_dump($response);
        //echo $response->tracks->data;

            return view('topfrance', [
                'top' => json_decode($response),
                //dd(json_decode($response)),
              ]); 

        }

    }


