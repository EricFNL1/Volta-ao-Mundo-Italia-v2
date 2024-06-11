<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENWEATHERMAP_API_KEY');
    }

    public function getWeather($city)
    {
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric");

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    public function getWeatherForCities(array $cities)
    {
        $weatherData = [];

        foreach ($cities as $city) {
            $weather = $this->getWeather($city);
            if ($weather) {
                $weatherData[$city] = $weather;
            }
        }

        return $weatherData;
    }
}
