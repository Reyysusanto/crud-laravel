<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 sm:p-8 lg:p-12">

                <div class="flex flex-col gap-y-6">
                    <h1 class="text-3xl text-indigo-950 font-bold mb-6">Project Order Detail</h1>
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col gap-y-1">
                            <h3 class="font-bold text-xl">
                                {{ $projectOrder->name }}
                            </h3>
                            <p class="text-sm text-slate-400">
                                {{ $projectOrder->category }}
                            </p>
                        </div>
                        <p class="text-sm bg-blue-100 text-blue-800 px-4 py-2 rounded-md font-medium shadow-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.94 3.21A2 2 0 0 1 4.75 2h10.5a2 2 0 0 1 1.81 1.21L10 9 2.94 3.21zM2 5.06V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.06l-7.06 5.33a1 1 0 0 1-1.24 0L2 5.06z"/>
                            </svg>
                            {{ $projectOrder->email }}
                        </p>
                    </div>

                <hr class="my-2">

                <div class="bg-gray-100 p-4 rounded-md shadow-sm border-l-4 border-indigo-500">
                    <h3 class="text-lg font-medium text-gray-700">
                        {{ $projectOrder->brief }}
                    </h3>
                </div>                
                <h3 class="text-lg font-bold text-green-800 bg-green-100 px-4 py-2 rounded-md shadow-sm">
                    Budget: ${{ number_format($projectOrder->budget, 2) }}
                </h3>
            </div>
        </div>
    </div>
</x-app-layout>
