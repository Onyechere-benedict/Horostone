<x-app-layout header="Let's see">
    <div>
        <img src="{{ asset('test-images/products_page_side.jpg') }}"
             alt=""
             class="object-cover h-svh fixed top-0">
        <img src="{{ asset('test-images/products_page_side.jpg') }}"
             alt=""
             class="object-cover h-svh fixed top-0 right-0">
        <div class="max-w-[1260px] mx-auto bg-[url({{ asset('test-images/products_page_side.jpg') }})] relative z-10">

            <div class="p-5 py-25 pl-80 bg-[#E7E7E5] relative">

                <div class="absolute top-25 left-25 w-[30%] h-60 flex items-center">
                    {{-- <h3>Title</h3> --}}
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, vel similique recusandae quas
                        ullam nisi consequuntur? Iste ducimus porro amet, iure aliquid aliquam quisquam rerum repellat
                        doloremque in laborum cumque.
                    </p>
                </div>

                <div class="grid lg:grid-cols-4 gap-4 gap-y-8 overflow-hidden">
                    @foreach($stones as $stone)
                        <div
                             class="flex flex-col justify-end items-center gap-y-2 h-60 rounded-2xl first:col-start-2 relative overflow-hidden after:absolute after:size-full after:bg-linear-to-t after:from-transparent after:to-black/30">
                            <img src="{{ relative_asset($stone->image_url) }}"
                                 class="size-full object-contain"
                                 alt="...">
                            <div class="flex flex-col items-center">
                                <h2 class="text-xl">{{ strtoupper($stone->name) }}</h2>
                                @if($stone->associationSet != null)
                                    <h4>{{ $stone->associationSet->zodiac }}</h4>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>