<?php

namespace App\Http\Controllers;

use RakibDevs\Weather\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function echo(){
        $wt = new Weather();
        $town = "Москва";
        $info = $wt->getCurrentByCity($town);
        $name = $info -> name;
        $temp = round($info -> main -> temp);
        $pressure = $info -> main -> pressure;
        $humidity = $info -> main -> humidity;
        $windSpeed = round($info -> wind -> speed);
        $windDirection = $info -> wind -> deg;
        $description = $info -> weather[0] -> description;
        $rainPercent = $info -> clouds -> all;
        $jsonData = json_decode(file_get_contents(resource_path() . "/json/russia.json"), true);
        
        return view('main', [
            'temp' => $temp,
            'pressure' => $pressure,
            'humidity' => $humidity,
            'name' => $name,
            'windSpeed' => $windSpeed,
            'windDirection' => $windDirection,
            'description' => $description,
            'rainPercent' => $rainPercent,
            'town' => $town,
            'jsonData' => $jsonData,
        ]
    );
    }
}
