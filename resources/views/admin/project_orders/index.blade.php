<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 sm:p-8 lg:p-12">
                <a href="{{ route('admin.projects.create')}}" class="py-4 px-10 text-white bg-indigo-950 rounded-full font-bold mb-6 inline-block">
                    Project Order
                </a>
                <hr class="my-6">
                <div class="flex flex-col gap-y-5">

                    @forelse ($projectOrders as $projectOrder)
                        <div class="item-project flex flex-col sm:flex-row gap-x-5 justify-between items-start sm:items-center">
                            <div class="flex flex-row items-center gap-x-5">
                                <div class="flex flex-col gap-y-1">
                                    <h3 class="font-bold text-xl">
                                        {{ $projectOrder->name }}
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        {{ $projectOrder->category }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center gap-x-2 mt-4 sm:mt-0">
                                <h3 class="font-bold text-xl bg-green-100 text-green-800 px-4 py-2 rounded-lg shadow-sm">
                                    Budget ${{ number_format($projectOrder->budget, 2) }}
                                </h3>                            
                                <a href="{{ route('admin.project_orders.show', $projectOrder) }}" class="py-3 px-5 rounded-full bg-indigo-500 text-white">Show Detail</a>
                            </div>
                        </div>                        
                    @empty
                        <p>
                            Belum ada project tersedia
                        </p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
