<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-900 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm rounded font-bold bg-blue-500 px-3 text-white py-2">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm rounded font-bold bg-blue-500 px-3 text-white py-2">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-5xl font-extrabold text-yellow-500">Code Test</h1>
                <p class="mt-3 text-white">For TranSave Technologies LTD</p>
                <a href="https://github.com/tonynnabs/swap-api" class="flex mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                      </svg>
                      <p class="text-gray-400">Github Repo</p>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
