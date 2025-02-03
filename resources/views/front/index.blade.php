@extends('front/layouts/app')
@section('title', 'Laravel Porto')
@section('content')

    <section id="Header" class="flex flex-col gap-[50px] md:gap-[100px] bg-portto-black relative">
        <nav class="container max-w-[1130px] mx-auto flex flex-wrap justify-between items-center pt-[20px] md:pt-[30px] z-10">
            <a href="index.html" class="flex shrink-0 h-fit w-fit">
                <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
            </a>
            <div class="hidden lg:flex gap-[30px] md:gap-[50px] items-center">
                <ul class="flex flex-col lg:flex-row gap-[20px] md:gap-[50px] items-center text-white text-sm md:text-lg">
                    <li><a href="index.html" class="font-medium hover:text-portto-light-gold transition-all duration-300">Home</a></li>
                    <li><a href="" class="font-medium hover:text-portto-light-gold transition-all duration-300">Services</a></li>
                    <li><a href="" class="font-medium hover:text-portto-light-gold transition-all duration-300">Testimonials</a></li>
                    <li><a href="" class="font-medium hover:text-portto-light-gold transition-all duration-300">Pricing</a></li>
                    <li><a href="" class="font-medium hover:text-portto-light-gold transition-all duration-300">About</a></li>
                </ul>
                <button class="bg-portto-light-gold font-bold text-base md:text-lg p-[10px_20px] md:p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
            </div>
        </nav>

        <div class="hero container max-w-[1130px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative px-4">
            <div class="flex flex-col gap-[30px] md:gap-[50px] text-white z-10">
                <p class="font-semibold text-lg md:text-2xl">I’m Reyy 👋</p>
                <h1 class="font-extrabold text-[40px] md:text-[80px] leading-[50px] md:leading-[90px]">Professional Designer & Dev</h1>
                <button class="font-bold text-xl md:text-[26px] leading-[30px] md:leading-[39px] rounded-[20px] md:rounded-[30px] p-[20px_30px] md:p-[30px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore Now</button>
            </div>
            <div class="flex max-w-[300px] md:max-w-[471px] max-h-[400px] md:max-h-[567px] mx-auto z-10">
                <img src="{{asset('images/hero-image.png')}}" class="w-full h-full object-contain" alt="hero image">
            </div>
            <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-[70%] md:w-auto" alt="background icon">
        </div>

        <div class="company-logos w-full overflow-hidden pb-[100px] md:pb-[190px]">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[40px] md:gap-[70px] pl-[40px] md:pl-[70px] items-center">
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
            </div>
        </div>

        <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] grid grid-cols-2 md:flex justify-between items-center px-[50px] md:px-[100px] rounded-[30px] w-full h-auto md:h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2 gap-5 md:gap-0 py-[30px] md:py-0">
            <div class="text-center">
                <p class="font-extrabold text-[30px] md:text-[40px] leading-[40px] md:leading-[60px]">$230M</p>
                <p class="font-semibold text-base md:text-lg">Valuation</p>
            </div>
            <div class="text-center">
                <p class="font-extrabold text-[30px] md:text-[40px] leading-[40px] md:leading-[60px]">31,934</p>
                <p class="font-semibold text-base md:text-lg">Projects</p>
            </div>
            <div class="text-center">
                <p class="font-extrabold text-[30px] md:text-[40px] leading-[40px] md:leading-[60px]">245</p>
                <p class="font-semibold text-base md:text-lg">Startups IPO</p>
            </div>
            <div class="text-center">
                <p class="font-extrabold text-[30px] md:text-[40px] leading-[40px] md:leading-[60px]">9/10</p>
                <p class="font-semibold text-base md:text-lg">Successful</p>
            </div>
            <div class="text-center col-span-2 md:col-span-1">
                <p class="font-extrabold text-[30px] md:text-[40px] leading-[40px] md:leading-[60px]">562</p>
                <p class="font-semibold text-base md:text-lg">Companies</p>
            </div>
        </div>
    </section>

    <section id="Services" class="container max-w-[1130px] mx-auto pt-[190px] pb-[100px]">
        <div class="flex flex-col gap-[50px]">
            <div class="flex justify-between items-center">
                <h2 class="font-extrabold text-[50px] leading-[70px]">Actually, I Do Design <br>& Code for Living</h2>
                <a href="" class="font-bold text-lg bg-portto-black rounded-full w-fit h-fit p-[14px_30px] text-white transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">All Services</a>
            </div>
            <div class="grid grid-cols-2 gap-[30px]">
                <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                        <img src="{{asset('images/icons/crown.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[32px] leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product.</p>
                    </div>
                    <div class="w-full h-[350px]">
                        <img src="{{asset('images/services1.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-green">
                        <img src="{{asset('images/icons/code.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[32px] leading-[48px]">AI Business Dashboard Finance Company</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using product.</p>
                    </div>
                    <div class="w-full h-[350px]">
                        <img src="{{asset('images/services2.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
                <div class="col-span-2 p-[50px] pb-0 rounded-[30px] flex gap-[50px] bg-[#F4F5F8]">
                    <div class="flex flex-col gap-[50px]">
                        <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-red">
                            <img src="{{asset('images/icons/3dcube.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                        </div>
                        <div class="flex flex-col gap-5">
                            <p class="font-extrabold text-[32px] leading-[48px]">Robust Plugins Connected Machine Learning</p>
                            <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product to grow.</p>
                        </div>
                    </div>
                    <div class="w-[450px] h-[350px] flex shrink-0">
                        <img src="{{asset('images/services3.png')}}" class="w-full object-contain" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Projects" class=" w-full flex flex-col py-[100px] bg-[url('{{asset('images/background/background1.png')}}')] bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col gap-[10px] mb-[50px]">
            <h2 class="font-extrabold text-[50px] leading-[70px] text-center text-white">Great Projects</h2>
            <p class="text-lg text-center text-white">Working with awesome team from around the world</p>
        </div>
        <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">    
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                    @forelse ($projects as $project)
                        <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">{{ $project->name }}</p>
                                    <p class="text-lg text-[#BABABC]"> {{ $project->category }}</p>
                                </div>
                                <a href="{{ route('front.detail', $project) }}" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                                <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                    @forelse ($projects as $project)
                        <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">{{ $project->name }}</p>
                                    <p class="text-lg text-[#BABABC]"> {{ $project->category }}</p>
                                </div>
                                <a href="{{ route('front.detail', $project) }}" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                                <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <div class="projects w-full flex flex-col overflow-hidden">    
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap">
                    @forelse ($projects as $project)
                        <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">{{ $project->name }}</p>
                                    <p class="text-lg text-[#BABABC]"> {{ $project->category }}</p>
                                </div>
                                <a href="{{ route('front.detail', $project) }}" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                                <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[30px] pl-[30px] items-center flex-nowrap ">
                    @forelse ($projects as $project)
                        <div class="group w-[650px] h-[450px] flex shrink-0 rounded-[30px] border border-white p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[608px] h-[408px] rounded-[30px] overflow-hidden absolute">
                                <img src="{{ Storage::url($project->cover) }}" class="w-full h-full object-cover" alt="thumbnail">
                            </div>
                            <div class="flex flex-col w-full items-center justify-center gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 hover:opacity-100 transition-all duration-300">
                                <div class="text-center z-10">
                                    <p class="font-extrabold text-[32px] leading-[48px] mb-[10px] text-white">{{ $project->name }}</p>
                                    <p class="text-lg text-[#BABABC]"> {{ $project->category }}</p>
                                </div>
                                <a href="{{ route('front.detail', $project) }}" class="z-10 font-bold text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">View Details</a>
                                <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2" alt="background icon">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section id="Workflow" class="container max-w-[1130px] mx-auto pt-[100px] pb-[200px] relative">
        <div class="flex flex-col gap-[50px] justify-center">
            <h2 class="font-extrabold text-3xl md:text-5xl leading-[40px] md:leading-[70px] text-center">
                My Workflow Suitable <br class="hidden md:block"> For Any Project
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="flex flex-col items-center gap-5">
                    <img src="{{asset('images/icons/messages-notif.svg')}}" alt="icon" class="w-16 md:w-auto">
                    <div>
                        <p class="font-extrabold text-xl md:text-2xl leading-[33px]">Research & Validate</p>
                        <p class="text-lg md:text-xl leading-[34px]">Ensuring all requirements match market conditions.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-5">
                    <img src="{{asset('images/icons/programming-notif.svg')}}" alt="icon" class="w-16 md:w-auto">
                    <div>
                        <p class="font-extrabold text-xl md:text-2xl leading-[33px]">Building with Teams</p>
                        <p class="text-lg md:text-xl leading-[34px]">Working with agile frameworks to produce better results.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-5">
                    <img src="{{asset('images/icons/like-notif.svg')}}" alt="icon" class="w-16 md:w-auto">
                    <div>
                        <p class="font-extrabold text-xl md:text-2xl leading-[33px]">Deliver to Clients</p>
                        <p class="text-lg md:text-xl leading-[34px]">Instant results delivered to clients for their satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] grid grid-cols-2 md:grid-cols-5 justify-center items-center px-6 md:px-[100px] py-6 md:py-0 rounded-[30px] w-full h-auto md:h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2 gap-6">
            <div>
                <p class="font-extrabold text-2xl md:text-4xl leading-[40px] md:leading-[60px]">$230M</p>
                <p class="font-semibold text-lg">Valuation</p>
            </div>
            <div>
                <p class="font-extrabold text-2xl md:text-4xl leading-[40px] md:leading-[60px]">31,934</p>
                <p class="font-semibold text-lg">Projects</p>
            </div>
            <div>
                <p class="font-extrabold text-2xl md:text-4xl leading-[40px] md:leading-[60px]">245</p>
                <p class="font-semibold text-lg">Startups IPO</p>
            </div>
            <div>
                <p class="font-extrabold text-2xl md:text-4xl leading-[40px] md:leading-[60px]">9/10</p>
                <p class="font-semibold text-lg">Successful</p>
            </div>
            <div>
                <p class="font-extrabold text-2xl md:text-4xl leading-[40px] md:leading-[60px]">562</p>
                <p class="font-semibold text-lg">Companies</p>
            </div>
        </div>
    </section>
    
    <section id="Testimonials" class="bg-[#F4F5F8]">
        <div class="container max-w-[1130px] mx-auto pt-[180px] pb-[100px]">
            <h2 class="font-extrabold text-[50px] leading-[70px] text-center">
                I Have Delivered Success <br>For All My Clients
            </h2>
            <div class="grid grid-cols-2 gap-[30px] mt-[50px]">
                <x-testimonial-card 
                    logo="images/logos/logo-testi.svg"
                    message="Metode kerjanya benar-benar berbeda dari freelancer lain, ia memiliki pola pikir yang dapat menciptakan produk berpusat pada pengguna dan pengguna sangat menyukainya."
                    stars="5"
                    photo="images/photo/photo.png"
                    name="Jessi Lyio"
                    role="CPO Agolia Modd"
                />
    
                <x-testimonial-card 
                    logo="images/logos/logo-testi2.svg"
                    message="Dia membantu kami membangun prototipe pertama untuk memenangkan hati investor dan pengguna awal, yang menghasilkan daya tarik besar. Akan merekrutnya kembali kapan saja!"
                    stars="5"
                    photo="images/photo/photo2.png"
                    name="Mariam Sya"
                    role="Founder TinderJobs"
                />
    
                <x-testimonial-card 
                    logo="images/logos/logo-testi3.svg"
                    message="Bekerja dengannya sangat luar biasa! Wawasannya membantu kami menyusun strategi produk yang lebih baik dan meningkatkan daya saing di pasar."
                    stars="5"
                    photo="images/photo/photo3.png"
                    name="John Ceyna"
                    role="Investor at Wokiya"
                />
    
                <x-testimonial-card 
                    logo="images/logos/logo-testi4.svg"
                    message="Pendekatan inovatifnya sangat membantu tim kami memahami kebutuhan pelanggan dengan lebih baik. Sangat direkomendasikan!"
                    stars="5"
                    photo="images/photo/photo.png"
                    name="Yein Balli"
                    role="CMO Waniwani"
                />
            </div>
        </div>
    </section>
    
    <x-faq />

    <x-footer />

@endsection
    
@push('after-script')
    <script src="{{asset('js/main.js')}}"></script>
@endpush
