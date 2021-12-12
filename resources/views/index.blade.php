<x-home-layout>
    {{-- Section Hero --}}
    <div class="py-12 bg-white border-b border-gray-200"
        style="background-image: url('{{ asset('img/bg-gradient.avif') }}'); background-size: cover">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center">
                <div class="text-center lg:text-left">
                    {{-- Hero title --}}
                    <h1
                        class="font-light tracking-tight text-4xl lg:text-6xl mb-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-pink-600">
                        Bangun Karirmu Sebagai Developer Profesional
                    </h1>

                    {{-- Secondary title --}}
                    <p class="text-lg md:text-xl text-blue-900 mb-3">
                        Materi Standar Internasional. Diajarkan sampai paham. Dapatkan dukungan kapanpun kamu butuhkan.
                    </p>

                    {{-- Call to actions --}}
                    <div class="mb-3 text-center">
                        <div class="lg:grid lg:grid-cols-2">
                            <a href="#"
                                class="block px-4 py-2 border border-transparent rounded-md font-semibold text-base tracking-wider transition ease-in-out duration-150 bg-blue-600 hover:bg-blue-700 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:border-blue-600 ring-blue-600 focus:ring-opacity-50">
                                Mulai Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Hero Image --}}
                <div class="mb-3 flex justify-center">
                    <img class="rounded-xl shadow"
                        src="{{ asset('img/hero.avif') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Section mitra --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg py-6">
                <div class="mb-5 px-6 text-center">
                    <h1 class="text-blue-600 font-light text-3xl">Bekerja sama dengan mitra-mitra Besar</h1>
                </div>
                <div class="max-w-lg mx-auto">
                    <div class="grid grid-cols-3 gap-3 place-items-center">
                        {{-- Google --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png')}}
                        </x-mitra-image>

                        {{-- Aws --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-aws.png')}}
                        </x-mitra-image>

                        {{-- IBM --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-ibm.png')}}
                        </x-mitra-image>

                        {{-- Kampus Merdeka --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-kampus-merdeka.png')}}
                        </x-mitra-image>

                        {{-- Bangkit --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-bangkit.png')}}
                        </x-mitra-image>

                        {{-- Microsoft --}}
                        <x-mitra-image>
                            {{__('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-microsoft.png')}}
                        </x-mitra-image>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Pricing --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8">
            {{-- Title --}}
            <div class="block text-center mb-3">
                <h1 class="font-light text-3xl text-gray-800 mb-3">Belajar semakin asyik dan seru dengan Academica Plus
                </h1>
                <p class="text-gray-400 text-xl font-normal">Academica Plus memberikan kamu keuntungan yang
                    berlipat-lipat</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-3">
                    {{-- Pricing Card Paket dasar--}}
                    <x-pricing-card>
                        {{-- Title --}}
                        <x-pricing-title>
                            {{__('Paket Dasar')}}
                            <x-slot name="price">
                                0
                            </x-slot>
                        </x-pricing-title>

                        <div class="mb-3">
                            <p class="text-gray-400 text-sm">cocok buat kamu yang baru ingin belajar pemrogramman</p>
                        </div>

                        {{-- image --}}
                        <x-pricing-image>{{__('img/undraw_startup_life_re_8ow9.svg')}}</x-pricing-image>
                        {{-- List --}}
                        <x-pricing-lists>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-green-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-900">Akses ke 5 kelas dasar</p>
                                </x-slot>
                            </x-list>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-gray-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-400">Chat Support</p>
                                </x-slot>
                            </x-list>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-gray-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-400">Bantuan langsung</p>
                                </x-slot>
                            </x-list>
                        </x-pricing-lists>
                        {{-- CTA --}}
                        <x-pricing-button />
                    </x-pricing-card>

                    {{-- Pricing Card Academica Plus--}}
                    <x-pricing-card>
                        {{-- Title --}}
                        <x-pricing-title>
                            {{__('Academica Plus')}}
                            <x-slot name="price">
                                149,000
                            </x-slot>
                        </x-pricing-title>

                        <div class="mb-3">
                            <p class="text-gray-400 text-sm">Materi dirancang dalam bentuk studi kasus, dengan penjelasan yang detail dan mendalam.</p>
                        </div>

                        {{-- image --}}
                        <x-pricing-image>{{__('img/undraw_maker_launch_crhe.svg')}}</x-pricing-image>
                        {{-- List --}}
                        <x-pricing-lists>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-green-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-900">Akses ke 40 kelas</p>
                                </x-slot>
                            </x-list>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-green-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-900">Chat Support</p>
                                </x-slot>
                            </x-list>
                            <x-list>
                                <x-check-logo class="h-5 w-5 text-green-400" />
                                <x-slot name="keuntungan">
                                    <p class="text-gray-900">Bantuan langsung</p>
                                </x-slot>
                            </x-list>
                        </x-pricing-lists>
                        {{-- CTA --}}
                        <x-pricing-button />
                    </x-pricing-card>
                </div>
            </div>
        </div>
    </section>

    {{-- Section ajakan --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="px-4 text-center bg-blue-500 rounded-lg flex justify-center items-center flex-col py-6">
                <div class="mb-3">
                    <h1 class="text-2xl lg:text-3xl font-light capitalize text-white">Tunggu apalagi
                    </h1>
                </div>
                <div class="mb-6">
                    <p class="text-blue-200">Dunia pemrograman yang seru menunggu Anda.</p>
                </div>
                <div class="mb-3">
                    <a class="px-8 py-2 bg-white text-blue-600 rounded hover:bg-blue-100" href="/register">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Products --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow">
                <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center mb-3">
                    <div class="px-4 py-4">
                        <div class="mb-3">
                            <h1 class="text-xl lg:text-3xl font-light text-blue-600">Our Goal is to help students grow
                                and succeed</h1>
                        </div>
                        <div class="mb-6">
                            <p class="text-gray-400 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequatur adipisci facilis minima?
                                Iste sequi facilis culpa laboriosam, eveniet exercitationem similique!</p>
                        </div>
                        <div class="mb-3">
                            <a class="px-4 py-2 bg-blue-600 text-white rounded-lg" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="p-4 lg:p-0">
                        <img class="rounded lg:rounded-tr lg:rounded-br"
                            src="{{ asset('img/studi.avif') }}"
                            alt="">
                    </div>
                </div>

                <div class="border-b border-gray-100 mb-3 "></div>

                <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center">
                    <div class="px-4 py-4 lg:order-last">
                        <div class="mb-3">
                            <h1 class="text-xl lg:text-3xl font-light text-blue-600">We help you to build you're skills
                                and connections </h1>
                        </div>
                        <div class="mb-6">
                            <p class="text-gray-400 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequatur adipisci facilis minima?
                                Iste sequi facilis culpa laboriosam, eveniet exercitationem similique!</p>
                        </div>
                        <div class="mb-3">
                            <a class="px-4 py-2 bg-blue-600 text-white rounded-lg" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="p-4 lg:p-0">
                        <img class="rounded lg:rounded-tr lg:rounded-br"
                            src="{{ asset('img/ketawa.avif') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</x-home-layout>