<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlanetsController extends Controller
{
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/planets/');
        $planets = $response['results'];
        return view('planets.index')
                ->with('planets', $this->formatPlanets($planets));
    }

    public function show($id)
    {
        $response = Http::get("https://swapi.dev/api/planets/$id");
        return view('planets.show')->with('planet', $response->json());
    }

    public function formatPlanets($planets)
    {
        return collect($planets)->map(function ($planet){
            return collect($planet)->merge([
                'id' => $int = (int) filter_var($planet['url'], FILTER_SANITIZE_NUMBER_INT),
                'new_terrain' => Str::limit($planet['terrain'], 15, $end='...'),
            ]);
        });
    }
}
