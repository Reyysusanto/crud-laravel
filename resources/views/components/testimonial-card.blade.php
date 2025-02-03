@props(['logo', 'message', 'stars' => 5, 'photo', 'name', 'role'])

<div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
    <div class="h-[40px] flex shrink-0">
        <img src="{{ asset($logo) }}" alt="logo">
    </div>
    <p class="font-semibold text-[22px] leading-[40px]">“{{ $message }}”</p>
    <div class="flex h-8">
        @for ($i = 0; $i < $stars; $i++)
            <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
        @endfor
    </div>
    <div class="flex items-center gap-4">
        <div class="w-[70px] h-[70px] shrink-0">
            <img src="{{ asset($photo) }}" alt="photo" class="rounded-full">
        </div>
        <div class="flex flex-col gap-[2px]">
            <p class="font-bold text-xl leading-[30px]">{{ $name }}</p>
            <p class="text-lg text-[#878C9C]">{{ $role }}</p>
        </div>
    </div>
</div>
