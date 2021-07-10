<x-app-layout>
    <div class="grid grid-cols-4 gap-5 p-10">

        @foreach ($vehicles as $vehicle)
            <div class="flex flex-col rounded-md">
                <div class=" flex flex-col items-center p-3 bg-yellow-200 bg-cover rounded-tr-md rounded-tl-md bg-center " style="background-image: url('/images/vehicles.svg')">
                    <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                          </svg>
                    </div>
                    <h2 class="pt-2 font-extrabold text-white text-lg">{{$vehicle['name']}}</h2>
                </div>
                <div class="h-2/3 bg-white px-3 py-5">
                    <div class="flex flex-row justify-between items-center pb-4 border-b border-gray-200">
                        <div class="text-center">
                            <h2 class="font-bold">{{$vehicle['length']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Length</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$vehicle['crew']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Crew</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$vehicle['passengers']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Passengers</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Model</h2>
                            <p class="text-gray-400">{{$vehicle['new_model']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Cost In Credits</h2>
                            <p class="text-gray-400">{{ $vehicle['cost_in_credits']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Max Speed</h2>
                            <p class="text-gray-400">{{$vehicle['max_atmosphering_speed']}}</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 py-3">
                        <a href="{{route('vehicle.show', $vehicle['id'])}}">
                            <button class="hover:bg-blue-500 hover:text-white transition-all ease-in-out duration-300 border-2 border-blue-500 text-blue-500 py-2 w-full rounded">View more info</button>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
