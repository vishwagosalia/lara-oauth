<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch weather data from API
        $response = Http::get('https://api.data.gov.sg/v1/environment/air-temperature');
        // Check if the request was successful
        if ($response->successful()) {
            $data = $response->json();
            // Extract stations metadata and readings
            $stations = collect($data['metadata']['stations'])->keyBy('id');
            $readings = $data['items'][0]['readings'] ?? [];

            // Map readings with station names
            $weatherData = collect($readings)->map(function ($reading) use ($stations) {
                return [
                    'station_id' => $reading['station_id'],
                    'name' => $stations[$reading['station_id']]['name'] ?? 'Unknown Station',
                    'temperature' => $reading['value']
                ];
            });
            $timestamp = $data['items'][0]['timestamp'];
        } else {
            $weatherData = ['error' => 'Failed to fetch weather data'];
        }
        return view('dashboard', compact('weatherData', 'timestamp'));
    }
}
