@props(['type' => 'full', 'src' => 'https://picsum.photos/seed/12345/1280/960'])

@if($type === 'full')

    <a href="#"
       class="flex flex-col relative h-full border border-gray-200 rounded-2xl group overflow-hidden place-content-end">
        <div
             class="absolute overflow-hidden w-full h-full after:absolute after:top-0 after:left-0 after:size-full after:bg-linear-to-b after:from-transparent after:to-black/20">
            <img src="{{ $src }}"
                 class="group-hover:scale-105 transition-all duration-500 ease-in object-cover w-full h-full"
                 alt="..." />
        </div>
        <div class="bg-tranparent relative z-1 text-white space-y-3 px-9 py-9 basis-2/5">
            {{ $slot }}
        </div>
    </a>

@elseif($type === 'split')

    <a href="#"
       class="flex flex-col h-full border border-gray-200 rounded-2xl group overflow-hidden">
        <div class="overflow-hidden basis-3/5">
            <img src="{{ $src }}"
                 class="group-hover:scale-105 transition-all duration-500 ease-in object-cover w-full h-full"
                 alt="..." />
        </div>
        <div class="bg-white text-black space-y-3 px-9 py-9 basis-2/5">
            {{ $slot }}
        </div>
    </a>

@endif