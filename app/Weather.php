<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    public function getWeather(){
        $service_url = 'api.openweathermap.org/data/2.5/weather?q=Warsaw&appid=70fb1f8925f85dd29e6cc120ed18382b';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        curl_close($curl);
        return $response;
    }
}
