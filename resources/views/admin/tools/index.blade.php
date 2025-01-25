<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 sm:p-8 lg:p-12">
                <a href="{{ route('admin.tools.create')}}" class="py-4 px-10 text-white bg-indigo-950 rounded-full font-bold mb-6 inline-block">
                    Add New Tools
                </a>
                <hr class="my-6">
                <div class="flex flex-col gap-y-5">

                    @forelse ($tools as $tool)
                        <div class="item-project flex flex-col sm:flex-row gap-x-5 justify-between items-start sm:items-center">
                            <div class="flex flex-row items-center gap-x-5">
                                <img src="{{ Storage::url($tool->logo) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                                <div class="flex flex-col gap-y-1">
                                    <h3 class="font-bold text-xl">
                                        {{ $tool->name }}
                                    </h3>
                                    <p class="text-sm text-slate-400">
                                        {{ $tool->tagline }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center gap-x-2 mt-4 sm:mt-0">
                                <a href="{{ route('admin.tools.edit', $tool) }}" class="py-3 px-5 rounded-full bg-indigo-500 text-white">Edit</a>
                                <form action="{{ route('admin.tools.destroy', $tool) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">Delete</button>
                                </form>
                            </div>
                        </div>                        
                    @empty
                        <p>
                            Belum ada tools yang digunakan
                        </p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
