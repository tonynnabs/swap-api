<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VehicleController extends Controller
{
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/vehicles/');
        $vehicles = $response['results'];
        return view('vehicles.index')
                ->with('vehicles', $this->formatVehicles($vehicles));
    }

    public function show($id)
    {
        $response = Http::get("https://swapi.dev/api/vehicles/$id");
        return view('vehicles.show')->with('vehicle', $response->json());
    }

    public function formatVehicles($vehicles)
    {
        return collect($vehicles)->map(function ($vehicle){
            return collect($vehicle)->merge([
                'id' => $int = (int) filter_var($vehicle['url'], FILTER_SANITIZE_NUMBER_INT),
                'new_model' => Str::limit($vehicle['model'], 15, $end='...'),
            ]);
        });
    }
}
