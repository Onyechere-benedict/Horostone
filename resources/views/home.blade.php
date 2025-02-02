<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <title>Horostone</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <main class="relative">

        <div class="fixed top-0 z-[200] w-full">
            <div class="flex bg-[#191919] text-white justify-around">
                {{-- cta --}}

                <div class="flex py-4 gap-x-5 text-xs">
                    <div class="space-x-1">

                        {{-- //icon --}}
                        <i class="fa-solid fa-location-dot icon"></i>
                        <span>J Close First Avenue Gwarimpa</span>
                    </div>

                    <div class="space-x-1">
                        {{-- //icon --}}
                        <i class="fa-solid fa-phone-volume icon"></i>
                        <span>(+123)816 186 6142</span>
                    </div>
                </div>
                <div class="flex gap-x-10 items-center">
                    {{-- //secondary --}}
                    <div class="space-x-3 text-sm">
                        <a href="#"><i class="fa-brands fa-facebook-f icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter icon"></i></a>
                        <a href="https://www.instagram.com/timbre.ng?igsh=MW5kbnAyZWJwc2lpYQ=="><i
                               class="fa-brands fa-instagram icon"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in icon"></i></a>
                    </div>
                    <a href="#"
                       class="rounded-3xl bg-[#FFA500] px-3 py-2 text-xs font-bold border border-white/50 hover:bg-white hover:text-(--accent-1) transition-all duration-300">Shop
                        Now!</a>
                </div>
            </div>


            <nav class="flex justify-around bg-transparent items-center text-white">
                <div>
                    <a href="/"
                       class="block w-[160px]">
                        <img src="{{ asset("images/lightLogo-removebg-preview.png") }}"
                             class="w-full"
                             alt="Company logo" />
                    </a>
                </div>
                <div class="space-x-5">
                    <x-nav-link href="/"
                                :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="#"
                                :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="#"
                                :active="request()->is('products')">Products</x-nav-link>
                    <x-nav-link href="#"
                                :active="request()->is('blog')">Blog</x-nav-link>

                    <a href="#"
                       class="hover:text-(--accent-1) transition-all duration-300">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>

                    <a href="#"
                       class="hover:text-(--accent-1) transition-all duration-300">
                        <i class="fa-solid fa-search"></i>
                    </a>
                </div>
                <div>
                    @if (Route::has('login'))
                        <div class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                   class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                   class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                       class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </div>



        <header class="h-svh relative overflow-hidden">

            <div id="default-carousel"
                 class="w-full h-full absolute"
                 data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden h-full">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out"
                         data-carousel-item>
                        <img src="{{ asset('images/crystal-landscape.jpg') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out"
                         data-carousel-item>
                        <img src="{{ asset('images/blue-crystals.jpg') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out"
                         data-carousel-item>
                        <img src="{{ asset('images/icy-crystals.jpg') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 4 -->
                    {{-- <div class="hidden duration-700 ease-in-out"
                         data-carousel-item>
                        <img src="/docs/images/carousel/carousel-4.svg"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out"
                         data-carousel-item>
                        <img src="/docs/images/carousel/carousel-5.svg"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div> --}}
                </div>
            </div>

            <div class="text-white relative top-1/2 text-center z-[100]">
                <h1 class="text-9xl font-times font-bold">Horostone</h1>
                <h3 class="text-3xl font-cursive">unrefined pure gems</h3>
            </div>



        </header>


        {{-- //should have h-svh? --}}
        <section class="flex flex-col justify-center items-center py-20 gap-10">
            {{-- Blog Container --}}
            <div class="header">
                <h1>What We Do</h1>
                <p>Timbre Integrated</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-10 max-w-[1260px] grow">

                <x-blog-card type="split"
                             src="{{ asset('images/agate_2.jpg') }}">
                    <h3 class="font-bold text-xl">Custom Software Development</h3>
                    <p class="text-sm/6">
                        We develop industry-specific software solutions for businesses looking to streamline
                        operations, automate processes, and improve efficiency. our expertie spans across different
                        industries, enabling us to develop robust, secure, and scalable software.
                    </p>
                </x-blog-card>
                <x-blog-card type="full"
                             src="{{ asset('images/amber-resin_2.jpg') }}">
                    <h3 class="font-bold text-xl">Networking & Troubleshooting</h3>
                    <p class="text-sm/6">
                        In the fast-paced digital world, a reliable and secure network is critical to your success.
                        Our networking service ensure your sysetems are always online,secure, and performing at
                        their best. we also offer comprehensive troubleshooting to minimize downtown and maximize
                        productivity.
                    </p>
                </x-blog-card>
                <x-blog-card type="split"
                             src="{{ asset('images/amethyst_2.jpg') }}">
                    <h3 class="font-bold text-xl">Consultation Services</h3>
                    <p class="text-sm/6">
                        Our Tech consultation services helps you navigate the complexities of IT infrastructure,
                        system integration, and digital transformation. We provide strategic insights and practical
                        recommendations to ensure your tech investment deliver maximum value to your business.
                    </p>
                </x-blog-card>
            </div>

        </section>


        <section class="h-[50vh] border border-y-1 flex items-center justify-center">
            {{-- Infinity image carousel --}}
            <h1 class="text-9xl font-bold italic">Infinity Image Carousel</h1>
        </section>



    </main>


    <aside class="bg-black h-[80vh] flex flex-col items-center justify-center gap-16">
        <h3 class="text-4xl text-neutral-500">Find the stone that speaks to your soul.</h3>

        <div class="text-2xl/9 max-w-prose flex flex-col gap-4 text-white space-y-2">
            <div class="font-bold text-center">
                <p>Your Magick items are just a click away - all orders are shipped next business day with tracking.
                </p>
                <p>At Magick Earth we will always have stock so you will never need to wait long for your new Magick
                    to
                    arrive</p>
            </div>
            <a href="#"
               class="rounded-3xl bg-[#FFA500] px-5 py-2 text-2xl border border-white/50 hover:bg-white hover:text-(--accent-1) transition-all duration-300 mx-auto">Shop
                Now</a>
        </div>
    </aside>


    <footer class="bg-stone-100">

        <div class="max-w-[1260px] mx-auto pb-20">


            <div class="py-32 flex">
                <h2 class="text-3xl basis-1/2 text-center">Subscribe to our Newsletter</h2>
                <div class="basis-1/2">

                    <form action="w-full grow"
                          class="relative">
                        <input type="email"
                               name="email"
                               id="email"
                               placeholder="Your email"
                               class="py-4 w-full border border-gray-200 focus:ring-black focus:border-black pl-6 pr-32 rounded-full" />
                        <button
                                class="bg-black hover:bg-black/80 border text-white absolute top-0 right-0 py-4 px-5 rounded-full transition-all duration-300">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="grid lg:grid-cols-4 gap-x-10">
                {{-- links --}}
                <div class="text-sm space-y-3 self-center">
                    {{-- grid item 1 --}}
                    <a href="#"
                       class="space-x-2 hover:text-(--accent-1) inline-block">
                        <i class="fa-solid fa-phone-volume icon"></i>
                        <span>(+234)816 186 6142</span>
                    </a>
                    <a href="#"
                       class="space-x-2 hover:text-(--accent-1) inline-block">
                        <i class="fa-solid fa-phone-volume icon"></i>
                        <span>horostoneng@gmail.com</span>
                    </a>
                    <a href="#"
                       class="space-x-2 hover:text-(--accent-1) inline-block">
                        <i class="fa-solid fa-location-dot icon"></i>
                        <span>J Close First Avenue</span>
                    </a>
                </div>


                <div class="space-y-4">
                    {{-- grid item 2 --}}
                    <h5 class="font-bold">Services</h5>
                    <div class="space-y-2 text-sm">
                        <a href="#"
                           class="inline-block hover:text-[#999]">Custom Software Development</a>
                        <a href="#"
                           class="inline-block hover:text-[#999]">Network & Troubleshooting</a>
                        <a href="#"
                           class="inline-block hover:text-[#999]">Consultation Services</a>
                        <a href="#"
                           class="inline-block hover:text-[#999]">Web Design & Development</a>
                        <a href="#"
                           class="inline-block hover:text-[#999]">POS(Point of Sale) System</a>
                    </div>
                </div>


                <div class="space-y-3">
                    {{-- grid item 3 --}}
                    <h5 class="font-bold">Connect</h5>
                    <div class="flex gap-x-1 text-lg">
                        <a href="#"
                           class="size-11 flex justify-center items-center border border-black hover:text-white hover:bg-black transition-all duration-300 rounded-full"><i
                               class="fa-brands fa-facebook-f icon"></i></a>
                        <a href="#"
                           class="size-11 flex justify-center items-center border border-black hover:text-white hover:bg-black transition-all duration-300 rounded-full"><i
                               class="fa-brands fa-twitter icon"></i></a>
                        <a href="https://www.instagram.com/timbre.ng?igsh=MW5kbnAyZWJwc2lpYQ=="
                           class="size-11 flex justify-center items-center border border-black hover:text-white hover:bg-black transition-all duration-300 rounded-full"><i
                               class="fa-brands fa-instagram icon"></i></a>
                        <a href="#"
                           class="size-11 flex justify-center items-center border border-black hover:text-white hover:bg-black transition-all duration-300 rounded-full"><i
                               class="fa-brands fa-linkedin-in icon"></i></a>
                    </div>
                    <p class="text-[#555] text-sm">
                        We bring the years, global experience, and stamina to guide our clients through new and often
                        disruptive realities.
                    </p>
                </div>


            </div>


        </div>

    </footer>

    <footer class="bg-black text-white">
        <div class="max-w-[1260px] flex justify-between text-sm mx-auto py-7">
            <span> ©2024 timbreintegrated. All rights reserved </span>
            <div class="space-x-8">
                <a href="#"
                   class="underline hover:no-underline">Privacy Policy</a>
                <a href="#"
                   class="underline hover:no-underline">Cookie Policy</a>
            </div>
        </div>
    </footer>



    <script src="{{ asset('js/flowbite.min.js') }}"></script>
</body>

</html>