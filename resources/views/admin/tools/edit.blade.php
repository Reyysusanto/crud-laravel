<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 sm:p-8 lg:p-12">

                @if ($errors->any())
                    <div class="alert alert-danger mb-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="py-5 bg-red-500 text-white font-bold">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.tools.update', $tool) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-y-6">
                        <h1 class="text-3xl text-indigo-950 font-bold mb-6">Create New Project</h1>

                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="text-lg font-medium">Tool Name</label>
                            <input value="{{ $tool->name }}" type="text" id="name" name="name" class="border p-3 rounded-md" placeholder="Enter project name">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="about" class="text-lg font-medium">Tagline</label>
                            <input value="{{ $tool->tagline }}" type="text" name="tagline" id="tagline" class="border p-3 rounded-md">
                        </div>
                        
                        <div class="flex flex-col gap-y-2">
                            <label for="cover" class="text-lg font-medium">Tool Logo</label>
                            <img src="{{ Storage::url($tool->logo) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <input type="file" id="logo" name="logo" class="border p-3 rounded-md">
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white mt-6 hover:bg-violet-800 transition duration-300">
                            Submit Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
