<x-home-layout>
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-light text-blue-900">
                Pricing
            </h1>
        </div>
    </header>

    <section class="py-12" id="pricing">
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
                    {{-- Pricing Card Paket dasar --}}
                    <x-pricing-card>
                        {{-- Title --}}
                        <x-pricing-title>
                            {{ __('Paket Dasar') }}
                            <x-slot name="price">
                                0
                            </x-slot>
                        </x-pricing-title>

                        <div class="mb-3">
                            <p class="text-gray-400 text-sm">cocok buat kamu yang baru ingin belajar pemrogramman</p>
                        </div>

                        {{-- image --}}
                        <x-pricing-image>{{ __('img/undraw_startup_life_re_8ow9.svg') }}</x-pricing-image>
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

                    {{-- Pricing Card Academica Plus --}}
                    <x-pricing-card>
                        {{-- Title --}}
                        <x-pricing-title>
                            {{ __('Academica Plus') }}
                            <x-slot name="price">
                                149,000
                            </x-slot>
                        </x-pricing-title>

                        <div class="mb-3">
                            <p class="text-gray-400 text-sm">Materi dirancang dalam bentuk studi kasus, dengan
                                penjelasan yang detail dan mendalam.</p>
                        </div>

                        {{-- image --}}
                        <x-pricing-image>{{ __('img/undraw_maker_launch_crhe.svg') }}</x-pricing-image>
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

    @include('layouts.footer')
</x-home-layout>
