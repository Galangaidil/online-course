<x-home-layout>
    {{-- Section Hero --}}
    <div class="py-12 bg-white border-b border-gray-200"
        style="background-image: url('https://images.unsplash.com/photo-1579547621706-1a9c79d5c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'); background-size: cover">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center">
                <div class="text-center lg:text-left">
                    {{-- Hero title --}}
                    <h1
                        class="font-extrabold text-5xl sm:text-6xl md:text-7xl mb-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-pink-600">
                        Bangun skill IT bersama Academica</h1>

                    {{-- Secondary title --}}
                    <p class="text-lg md:text-xl text-blue-900 mb-3">Our mission is to bring a bright future to
                        generation Z for preparation the Indonesian Golden Era in 2045.</p>

                    {{-- Call to actions --}}
                    <div class="mb-3 text-center">
                        <div class="lg:grid lg:grid-cols-2">
                            <a href="#"
                                class="block px-4 py-2 border border-transparent rounded-md font-semibold text-base tracking-widest transition ease-in-out duration-150 bg-blue-600 hover:bg-blue-700 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:border-blue-600 ring-blue-600 focus:ring-opacity-50">Getting
                                Started</a>
                        </div>
                    </div>
                </div>

                {{-- Hero Image --}}
                <div class="mb-3 flex justify-center">
                    <img class="rounded-xl shadow"
                        src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Section Pricing --}}
    <section class="py-12 bg-gradient-to-r from-gray-50 to-blue-100 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8">
            {{-- Title --}}
            <div class="block text-center mb-3">
                <h1 class="font-bold text-3xl text-gray-800 mb-3">Pricing</h1>
                <p class="text-gray-400 text-xl font-normal">Choose one of our friendly pricing that suitable for your
                    business to grow bigger</p>
            </div>

            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-3">

                {{-- Pricing Card Free--}}
                <x-pricing-card>
                    {{-- Title --}}
                    <x-pricing-title>
                        {{__('Free')}}
                        <x-slot name="price">
                            0,00
                        </x-slot>
                    </x-pricing-title>

                    {{-- image --}}
                    <x-pricing-image>{{__('img/undraw_startup_life_re_8ow9.svg')}}</x-pricing-image>

                    {{-- List --}}
                    <x-pricing-lists>
                        <x-list>
                            <x-check-logo class="h-5 w-5 text-green-400" />
                            <x-slot name="keuntungan">
                                <p class="text-gray-900">Lorem, ipsum dolor.</p>
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

                {{-- Pricing Card Regular--}}
                <x-pricing-card>
                    {{-- Title --}}
                    <x-pricing-title>
                        {{__('Regular')}}
                        <x-slot name="price">
                            99,000
                        </x-slot>
                    </x-pricing-title>

                    {{-- image --}}
                    <x-pricing-image>{{__('img/undraw_pair_programming_re_or4x.svg')}}</x-pricing-image>

                    {{-- List --}}
                    <x-pricing-lists>
                        <x-list>
                            <x-check-logo class="h-5 w-5 text-green-400" />
                            <x-slot name="keuntungan">
                                <p class="text-gray-900">Lorem, ipsum dolor.</p>
                            </x-slot>
                        </x-list>
                        <x-list>
                            <x-check-logo class="h-5 w-5 text-green-400" />
                            <x-slot name="keuntungan">
                                <p class="text-gray-900">Chat Support</p>
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

                {{-- Pricing Card Pro--}}
                <x-pricing-card>
                    {{-- Title --}}
                    <x-pricing-title>
                        {{__('pro')}}
                        <x-slot name="price">
                            149,000
                        </x-slot>
                    </x-pricing-title>

                    {{-- image --}}
                    <x-pricing-image>{{__('img/undraw_maker_launch_crhe.svg')}}</x-pricing-image>


                    {{-- List --}}
                    <x-pricing-lists>
                        <x-list>
                            <x-check-logo class="h-5 w-5 text-green-400" />
                            <x-slot name="keuntungan">
                                <p class="text-gray-900">Lorem, ipsum dolor.</p>
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
    </section>

    {{-- Section News --}}
    <section class="py-16 bg-white border-b border-gray-200"
        style="background-image: url('https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=820&q=80'); ; background-size: cover; background-position: center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 flex justify-center items-center flex-col">
                <div class="mb-3 border-b-8 border-yellow-500">
                    <h1 class="text-center text-2xl lg:text-5xl font-extrabold uppercase pb-6 text-gray-200">get
                        fast-tracked</h1>
                </div>
                <div class="mb-3 pt-3">
                    <h3 class="text-center text-2xl lg:text-6xl font-semibold text-gray-100 tracking-tighter">Join the
                        Largest online course <br> platform in South East Asia</h3>
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
                            <h1 class="text-xl lg:text-3xl font-bold text-blue-600">Our Goal is to help students grow
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
                            src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </div>
                </div>

                <div class="border-b border-gray-100 mb-3 "></div>

                <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center">
                    <div class="px-4 py-4 lg:order-last">
                        <div class="mb-3">
                            <h1 class="text-xl lg:text-3xl font-bold text-blue-600">We help you to build you're skills
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
                            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>