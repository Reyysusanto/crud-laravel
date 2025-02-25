@extends('front/layouts/app')
@section('title', 'Detail Laravel Porto')
@section('content')

<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative max-h-[665px] mb-[493px]">
    <nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10 flex-wrap">
        <a href="index.html" class="flex shrink-0 h-fit w-fit">
            <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
        </a>
        <div class="flex gap-[50px] items-center w-full justify-between md:w-auto">
            <ul class="flex gap-[50px] items-center text-white text-lg font-medium flex-wrap justify-center md:flex-nowrap">
                <li><a href="index.html" class="hover:text-portto-light-gold transition-all duration-300">Home</a></li>
                <li><a href="" class="hover:text-portto-light-gold transition-all duration-300">Services</a></li>
                <li><a href="" class="hover:text-portto-light-gold transition-all duration-300">Testimonials</a></li>
                <li><a href="" class="hover:text-portto-light-gold transition-all duration-300">Pricing</a></li>
                <li><a href="" class="hover:text-portto-light-gold transition-all duration-300">About</a></li>
            </ul>
            <button class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
        </div>
    </nav>

    <div class="hero container max-w-[1130px] mx-auto flex flex-col justify-center items-center relative px-6 md:px-0">
        <h1 class="font-extrabold text-[30px] md:text-[50px] leading-[40px] md:leading-[70px] text-white text-center z-10">
            {{ $project->name }}
        </h1>
        <p class="text-xl leading-[30px] text-white z-10">
            {{ $project->category }}
        </p>
        
        <!-- Image Container -->
        <div class="flex shrink-0 w-full h-[400px] md:h-[800px] rounded-[30px] overflow-hidden bg-white mt-[40px] md:mt-[70px] z-10">
            <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
        </div>
        
        <!-- Background Icon -->
        <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-[135px] w-[35%] md:w-[20%]" alt="background icon">
    </div>
</section>

<section id="Details" class="container max-w-[1130px] mx-auto pt-[50px] px-6 md:px-0">
    <div class="flex flex-col md:flex-row gap-[50px] justify-between">
        <!-- First Purpose Section -->
        <div class="flex flex-col gap-5 md:w-1/2">
            <h2 class="font-extrabold text-2xl">The First Purpose</h2>
            <div class="description flex flex-col gap-4 font-medium text-lg leading-[38px]">
                {{ $project->about }}
            </div>
            <div class="flex gap-4 flex-wrap">
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{asset('images/icons/crown-black.svg')}}" alt="icon">
                    </div>
                    <p class="font-semibold">Startup</p>
                </div>
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{asset('images/icons/code-black.svg')}}" alt="icon">
                    </div>
                    <p class="font-semibold">Future AI</p>
                </div>
                <div class="flex items-center gap-1 bg-[#F4F5F8] p-[8px_10px] rounded-[12px]">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{asset('images/icons/chart-2-black.svg')}}" alt="icon">
                    </div>
                    <p class="font-semibold">Finance</p>
                </div>
            </div>
        </div>

        <!-- Software Used Section -->
        <div class="flex flex-col gap-5 md:w-1/2">
            <h2 class="font-extrabold text-2xl">Software Used</h2>
            <div class="software-container flex flex-col gap-5 w-full">
                @forelse ($project->tools as $tool)
                    <div class="card-software w-full flex items-center bg-[#F4F5F8] rounded-2xl p-5 gap-4 transition-all duration-300 hover:ring-2 hover:ring-portto-purple">
                        <div class="w-[70px] h-[70px] bg-white rounded-full flex shrink-0 items-center justify-center">
                            <img src="{{ Storage::url($tool->logo) }}" alt="tool">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="tool-title font-bold text-xl leading-[30px]">{{ $tool->name }}</p>
                            <p class="text-lg text-[#878C9C]">{{ $tool->tagline }}</p>
                        </div>
                    </div>
                @empty
                    <p>Belum terdapat tools yang diberikan</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

<section id="Screenshots" class="container max-w-[1130px] mx-auto pt-[50px] px-6 md:px-0">
    <div class="flex flex-col gap-5">
        <h2 class="font-extrabold text-2xl">Screenshots</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5">
            @forelse ($project->screenshots as $screenshot)
                <a href="{{ Storage::url($screenshot->screenshot) }}" class="group w-full h-[190px] flex overflow-hidden rounded-[30px] ring-1 ring-[#E4E5E8] transition-all duration-300 hover:ring-[3px] hover:ring-portto-purple relative" data-fancybox="gallery" data-caption="Screenshot #1">
                    <img src="{{ Storage::url($screenshot->screenshot) }}" class="w-full h-full object-cover" alt="thumbnail">
                    <img src="{{asset('images/icons/eye.svg')}}" class="absolute transition-all duration-300 opacity-0 group-hover:opacity-100  transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10" alt="icon eye">
                </a>
            @empty
                <p>Belum terdapat screenshot yang ditambahkan</p>
            @endforelse
        </div>
    </div>
</section>

<section id="Featured-testimonial" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[100px] items-center px-[65px] pt-[100px]">
        <div class="flex flex-col gap-5 relative">
            <div class="flex w-[200px] h-[250px] rounded-[30px] shrink-0 overflow-hidden z-10">
                <img src="{{asset('images/photo/photo5.png')}}" alt="photo">
            </div>
            <div class="flex flex-col gap-[6px] text-center">
                <p class="font-bold text-2xl">Shirley Pop</p>
                <p class="text-xl text-[#878C9C]">Founder Bwalajar</p>
            </div>
            <img src="{{asset('images/icons/quote.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-[21px] top-[14px]" alt="icon">
        </div>
        <div class="flex flex-col gap-[50px]">
            <div class="flex shrink-0">
                <img src="{{asset('images/logos/logo-testi5.svg')}}" alt="logo">
            </div>
            <p class="font-semibold text-[32px] leading-[60px]">She helped us to build our first prototype to win our investor and early users heart that generate huge attraction. Will hire her back again anytime soon.</p>
            <div class="flex h-8 w-fit shrink-0">
                <img src="{{asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
            </div>
        </div>
    </div>
</section>

<section id="Book"  class="container max-w-[1130px] mx-auto">
    <div class="bg-portto-black flex justify-between px-[50px] rounded-[50px] h-[476px] mt-[100px] bg-[url('{{asset('images/Ellipse.svg')}}')] bg-center bg-no-repeat bg-contain relative">
        <div class="group/projects w-[220px] overflow-hidden">    
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail2.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail3.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToT_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail2.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail3.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 items-center justify-center text-center w-fit">
            <h2 class="font-extrabold text-[40px] leading-[60px] text-white">Let Me Help You <br>Grow Business Today</h2>
            <p class="font-semibold text-lg leading-[32px] text-white">I will dedicate my entire career to focus <br>on finishing your future dreams</p>
            <a href="{{ route('front.book') }}" class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Book a Meeting</a>
        </div>
        <div class="group/projects w-[220px] overflow-hidden">    
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail2.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail3.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider flex flex-col h-max justify-center">
                <div class="project-container animate-[slideToB_30s_linear_infinite] group-hover/projects:pause-animate flex flex-col gap-[30px] pt-[30px] justify-center">
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail1.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail2.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full h-[160px] flex shrink-0 rounded-[30px] border border-white p-[10px] bg-[#FFFFFF33] backdrop-blur">
                        <div class="w-full h-full rounded-[20px] overflow-hidden">
                            <img src="{{asset('images/thumbnails/thumbnail3.png')}}" class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-faq />

<x-footer />

@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush
@push('after-script')
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endpush