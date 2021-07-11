<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VehicleController extends Controller
{
    /**
     * Return List of all vehicles to the view
     *
     * @return void
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/vehicles/');
        $vehicles = $response['results'];
        return view('vehicles.index')
                ->with('vehicles', $this->formatVehicles($vehicles));
    }

    /**
     * Return detailed info of selected vehicle
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $response = Http::get("https://swapi.dev/api/vehicles/$id");
        return view('vehicles.show')->with('vehicle', $response->json());
    }

    /**
     * Formatting Vehicle api response to merge ID and model
     *
     * @param  mixed $vehicles
     * @return void
     */
    public function formatVehicles($vehicles)
    {
        return collect($vehicles)->map(function ($vehicle){
            return collect($vehicle)->merge([
                'id' => $int = (int) filter_var($vehicle['url'], FILTER_SANITIZE_NUMBER_INT),
                'new_model' => Str::limit($vehicle['model'], 15, $end='...'),
                'cost_in_credits' => number_format((int) $vehicle['cost_in_credits'], 0, ','),
                'max_atmosphering_speed' => number_format((int) $vehicle['max_atmosphering_speed'], 0, ','),
            ]);
        });
    }
}
