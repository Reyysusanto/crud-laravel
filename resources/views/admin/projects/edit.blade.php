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

                <form action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-y-6">
                        <h1 class="text-3xl text-indigo-950 font-bold mb-6">Create New Project</h1>

                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="text-lg font-medium">Project Name</label>
                            <input value="{{ $project->name }}" type="text" id="name" name="name" class="border p-3 rounded-md" placeholder="Enter project name">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="category" class="text-lg font-medium">Category</label>
                            <select name="category" id="category" class="border p-3 rounded-md">
                                <option selected value="{{ $project->category }}">{{ $project->category }}</option>
                                <option value="Website Development">Website Development</option>
                                <option value="App Development">App Development</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="cover" class="text-lg font-medium">Cover Image</label>
                            <img src="{{ Storage::url($project->cover) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <input type="file" id="cover" name="cover" class="border p-3 rounded-md">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="about" class="text-lg font-medium">About Project</label>
                            <textarea name="about" id="about" cols="30" rows="10" class="border p-3 rounded-md" placeholder="Describe the project">{{ $project->about }}</textarea>
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
