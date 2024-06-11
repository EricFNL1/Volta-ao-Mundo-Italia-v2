<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function index()
    {
        $cities = ['Rome', 'Pisa', 'Venice'];
        $weatherData = $this->weatherService->getWeatherForCities($cities);

        return view('pontturisticos', compact('weatherData'));
    }
}
