<x-app-layout>
    <div class="grid grid-cols-4 gap-5 p-10">

        @foreach ($people as $person)
            <div class="flex flex-col rounded-md">
                <div class=" flex flex-col items-center p-3 bg-blue-200 bg-cover rounded-tr-md rounded-tl-md bg-center " style="background-image: url('/images/bg.svg')">
                    <div class="bg-gray-200 p-5 rounded-full border-2 border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="pt-2 font-extrabold text-white text-lg"><a  class="cursor-pointer" href="{{route('people.show', $person['id'])}}">{{$person['name']}}</a></h2>
                </div>
                <div class="h-2/3 bg-white px-3 py-5">
                    <div class="flex flex-row justify-between items-center pb-4 border-b border-gray-200">
                        <div class="text-center">
                            <h2 class="font-bold">{{$person['gender']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Gender</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$person['height']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Height</p>
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold">{{$person['mass']}}</h2>
                            <p class="text-xs font-bold text-gray-400">Massr</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Hair Color</h2>
                            <p class="text-gray-400">{{$person['hair_color']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Birth Year</h2>
                            <p class="text-gray-400">{{$person['birth_year']}}</p>
                        </div>
                        <div class="flex items-center justify-between my-3">
                            <h2 class="font-bold">Skin Color</h2>
                            <p class="text-gray-400">{{$person['skin_color']}}</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 py-3">
                        <a href="{{route('people.show', $person['id'])}}">
                            <button class="hover:bg-blue-500 hover:text-white transition-all ease-in-out duration-300 border-2 border-blue-500 text-blue-500 py-2 w-full rounded">View more info</button>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
