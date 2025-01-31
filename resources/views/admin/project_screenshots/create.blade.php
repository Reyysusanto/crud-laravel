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

                <form action="{{ route('admin.project_screenshots.store', $project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-6">
                        <h1 class="text-3xl text-indigo-950 font-bold mb-6">Add project screenshot</h1>
                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($project->cover) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <div class="flex flex-col gap-y-1">
                                <h3 class="font-bold text-xl">
                                    {{ $project->name }}
                                </h3>
                                <p class="text-sm text-slate-400">
                                    {{ $project->category }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="screenshot" class="text-lg font-medium">Screenshots Image</label>
                            <input type="file" id="screenshot" name="screenshot" class="border p-3 rounded-md">
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white mt-6 hover:bg-violet-800 transition duration-300">
                            Submit Project
                        </button>
                    </div>
                </form>

                <hr class="my-10">

                <h3 class="text-lg font-medium"">
                    Existing screenshots
                </h3>
                <div class="flex flex-col gap-y-5">

                    @forelse ($project->screenshots as $screenshot)
                        <div class="item-project flex flex-col sm:flex-row gap-x-5 justify-between items-start sm:items-center">
                            <div class="flex flex-row items-center gap-x-5">
                                <img src="{{ Storage::url($screenshot->screenshot) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            </div>
                            <div class="flex flex-row items-center gap-x-2 mt-4 sm:mt-0">
                                <form action="{{ route('admin.project_screenshots.destroy', $screenshot->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">Delete</button>
                                </form>
                            </div>
                        </div>                        
                    @empty
                        <p>
                            Belum ada screenshot yang diberikan
                        </p>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
