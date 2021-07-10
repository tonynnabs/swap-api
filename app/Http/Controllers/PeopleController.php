<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/people/');
        $people = $response['results'];

        return view('people.index')
            ->with('people', $this->formatPeople($people));
    }

    public function show($id)
    {
        $response = Http::get("https://swapi.dev/api/people/$id");
        return view('people.show')->with('person', $this->formatPerson($response->json()));
    }

    public function formatPeople($people)
    {
        return collect($people)->map(function ($person){
            return collect($person)->merge([
                'id' => $int = (int) filter_var($person['url'], FILTER_SANITIZE_NUMBER_INT),
            ]);
        });
    }

    public function formatPerson($person)
    {
        return collect($person)->merge([
            'all_vehicles' => collect($person['vehicles'])->map(function ($vehicle){
                $response = Http::get($vehicle)->json();
                return [
                    'name' => $response['name'],
                    'id' => $int = (int) filter_var($response['url'], FILTER_SANITIZE_NUMBER_INT)
                ];
            }),

            'all_planets' => collect($person['homeworld'])->map(function ($planet){
                $response = Http::get($planet)->json();
                return [
                    'name' => $response['name'],
                    'id' => $int = (int) filter_var($response['url'], FILTER_SANITIZE_NUMBER_INT)
                ];
            }),
        ]);
    }
}
