<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlanetsController extends Controller
{
    /**
     * Return List of all planets to the view
     *
     * @return void
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/planets/');
        $planets = $response['results'];
        return view('planets.index')
                ->with('planets', $this->formatPlanets($planets));
    }

    /**
     * Return detailed info of selected planet
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $response = Http::get("https://swapi.dev/api/planets/$id");
        return view('planets.show')->with('planet', $response->json());
    }

    /**
     * Formatting planets api response to merge ID and shorten terrain
     *
     * @param  mixed $planets
     * @return void
     */
    public function formatPlanets($planets)
    {
        return collect($planets)->map(function ($planet){
            return collect($planet)->merge([
                'id' => $int = (int) filter_var($planet['url'], FILTER_SANITIZE_NUMBER_INT),
                'new_terrain' => Str::limit($planet['terrain'], 15, $end='...'),
                'population' => number_format((int) $planet['population'], 0, ','),
                'diameter' => number_format((int) $planet['diameter'], 0, ','),
            ]);
        });
    }
}
