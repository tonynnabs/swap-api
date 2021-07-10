<x-app-layout>
    <div class="bg-10 flex items-center px-10 py-24 bg-cover bg-center"
        style="background-image: url('/images/bg.svg')">
        <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>
        <div class="ml-5">
            <div class="flex items-center">
                <h1 class="text-5xl text-white mt-3 font-extrabold">{{$person['name']}}</h1>
                <span class="bg-blue-200  ml-3 text-black p-2 rounded-md text-xs">{{$person['gender']}}</span>
            </div>
            <div class="mt-3 flex items-center">
                <div class="flex items-center">
                    <p class="bg-blue-200 px-2 py-1 text-xs text-black">Height</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$person['height']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-blue-200 px-2 py-1 text-xs text-black">Mass</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$person['mass']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-blue-200 px-2 py-1 text-xs text-black">Skin Color</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$person['skin_color']}}</p>
                </div>
                <div class="flex items-center ml-3">
                    <p class="bg-blue-200 px-2 py-1 text-xs text-black">Hair Color</p>
                    <p class="bg-white px-2 py-1 text-xs font-bold">{{$person['hair_color']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 py-5 mt-5 flex items-start">
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Planet</h2>
            <ul class="my-5">
               @foreach ($person['all_planets'] as $planet)
                <li >
                    <a href="{{$planet['id']}}" class="flex items-center my-2">
                        <p class="mr-3">{{$planet['name']}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </a>

                </li>
               @endforeach
            </ul>
        </div>
        <div class="bg-white rounded-lg p-8 w-1/2 mx-2 shadow">
            <h2 class="text-2xl text-black font-bold">Vehicle</h2>
            <ul class="my-5">
                @foreach ($person['all_vehicles'] as $vehicle)
                <li>
                    <a href="{{$vehicle['id']}}" class="flex items-center my-2">
                        <p class="mr-3">{{$vehicle['name']}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </a>

                </li>
                @endforeach

            </ul>
        </div>
    </div>
</x-app-layout>
