<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WeatherController extends Controller
{
    function index(){
        if (Cache::get('temp') != null){
            $temp = Cache::get('temp');
            $wind = Cache::get('wind');
            $date = Cache::get('date');
            $date = time() - $date;
            $date = $date/60;
             }else{
            $w = new Weather();
            $w = $w->getWeather();
            $temp = $w->main->temp - 273.15;
            $wind = $w->wind->speed;
            $date = time();
            Cache::put('temp', $temp, 60);
            Cache::put('date', $date, 60);
            Cache::put('wind', $wind, 60);
        }
        $date = stristr($date, '.', true);
        $temp = substr($temp, 0, (stripos($temp, '.')+2));
           return view('weather', ['temp' => $temp, 'date' => $date, 'wind'=>$wind]);
    }
}
