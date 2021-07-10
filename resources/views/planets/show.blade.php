<x-app-layout>
    <div class="bg-10 flex items-center px-10 py-24 bg-cover bg-center"
        style="background-image: url('/images/planet.svg')">
        <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
        </div>
        <div class="ml-5">
            <div class="flex items-center">
                <h1 class="text-5xl text-white mt-3 font-extrabold">{{$planet['name']}}</h1>
            </div>
            <div class="mt-3 flex items-center">
                <div class="flex items-center">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Rotation</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['rotation_period']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Diameter</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['diameter']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Climate</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['climate']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Gravity</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['gravity']}}</p>
                </div>
            </div>
            <div class="mt-3 flex items-center">
                <div class="flex items-center">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Orbital</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['orbital_period']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Terrain</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['terrain']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Surface Water</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['surface_water']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-green-200 px-2 py-1 text-xs text-black">Population</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$planet['population']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-5 mt-5 flex items-start">
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Residents</h2>
            No data
        </div>
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Films</h2>
            No data
        </div>
    </div>
</x-app-layout>
