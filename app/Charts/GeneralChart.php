<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Support\Facades\Http;

class GeneralChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function details()
    {

    }
    public function handler(Request $request): Chartisan
    {
        $people = Http::get('https://swapi.dev/api/people/');
        $people = $people['count'];

        $planets = Http::get('https://swapi.dev/api/planets/');
        $planets = $planets['count'];

        $vehicles = Http::get('https://swapi.dev/api/vehicles/');
        $vehicles = $vehicles['count'];

        $data = [$people, $planets, $vehicles];

        return Chartisan::build()
            ->labels(['People', 'Planets', 'Vehicles'])
            ->dataset('Sample', $data);
    }
}
