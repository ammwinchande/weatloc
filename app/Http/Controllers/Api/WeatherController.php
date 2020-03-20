<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Zttp\Zttp;

class WeatherController extends Controller
{
    /**
     * Fetch weather information based on city ids
     * city ids: 160196 - Dodoma, 160263 - DSM, 149606 - Tanga
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchWeather($city_name = null)
    {
        $base_url = env('BASE_WEATHER_API_URL');
        $api_key = config('services.openweather.key');

        try {
            $response = Zttp::get($base_url . 'group?id=160263,160196,149606' . '&appid=' . $api_key . '&units=metric');
            return $response->json();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
