<x-app-layout>
    <div class="grid grid-cols-4 gap-5 p-10">

        @foreach ($planets as $planet)
            <div class="flex flex-col rounded-md">
                <div class=" flex flex-col items-center p-3 bg-blue-200 bg-cover rounded-tr-md rounded-tl-md bg-center " style="background-image: url('/images/planet.svg')">
                    <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                    <h2 class="pt-2 font-extrabold text-white text-lg">{{$planet['name']}}</h2>
                </div>
                <div class="h-2/3 bg-white px-3 py-5">
                    <div class="flex flex-row justify-between items-center pb-4 border-b border-gray-200">
                        <div class="text-center">
                            <h2 class="font-bold">{{$planet['diameter']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Diameter</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$planet['rotation_period']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Rotation</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$planet['surface_water']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Surface Water</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Population</h2>
                            <p class="text-gray-400">{{$planet['population']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Terrain</h2>
                            <p class="text-gray-400">{{ $planet['new_terrain']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Climate</h2>
                            <p class="text-gray-400">{{$planet['climate']}}</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 py-3">
                        <a href="{{route('planet.show', $planet['id'])}}">
                            <button class="hover:bg-blue-500 hover:text-white transition-all ease-in-out duration-300 border-2 border-blue-500 text-blue-500 py-2 w-full rounded">View more info</button>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
