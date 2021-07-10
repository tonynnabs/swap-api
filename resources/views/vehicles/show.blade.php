<x-app-layout>
    <div class="bg-10 flex items-center px-10 py-24 bg-cover bg-center"
        style="background-image: url('/images/vehicles.svg')">
        <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
              </svg>
        </div>
        <div class="ml-5">
            <div class="flex items-center">
                <h1 class="text-5xl text-white mt-3 font-extrabold">{{$vehicle['name']}}</h1>
                <span class="bg-yellow-200  ml-3 text-black p-2 rounded-md text-xs">{{$vehicle['vehicle_class']}}</span>
            </div>
            <div class="mt-3 flex items-center">
                <div class="flex items-center">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Model</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['model']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Manufacturer</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['manufacturer']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Cost</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['cost_in_credits']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Length</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['length']}}</p>
                </div>
            </div>
            <div class="mt-3 flex items-center">
                <div class="flex items-center">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Max Speed</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['max_atmosphering_speed']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Crew</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['crew']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Passengers</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['passengers']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-yellow-200 px-2 py-1 text-xs text-black">Cargo</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$vehicle['cargo_capacity']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-5 mt-5 flex items-start">
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Pilot</h2>
            No data
        </div>
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Films</h2>
            No data
        </div>
    </div>
</x-app-layout>
