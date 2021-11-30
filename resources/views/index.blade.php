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

            {{-- Card --}}
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-3">

                <div class="px-6 py-8 bg-white rounded-md shadow">
                    {{-- Title --}}
                    <div class="mb-3 block">
                        <h2 class="uppercase text-lg font-bold text-gray-800">Free</h2>
                        <p class="text-3xl text-gray-700 font-bold">0,00 IDR <span
                                class="text-gray-400 text-base font-normal">/ Month</span></p>
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <img class="rounded h-60 w-full" src="img/undraw_startup_life_re_8ow9.svg" alt="">
                    </div>

                    {{-- List --}}
                    <div class="mb-3">
                        <ul>
                            <li class="flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="mb-3 py-6 flex justify-center">
                        <button
                            class="px-12 py-3 bg-transparent hover:bg-green-400 border border-green-400 text-green-400 hover:text-white rounded text-base font-bold focus:outline-none focus:bg-green-400 focus:text-white">Choose
                            Plan</button>
                    </div>

                </div>

                <div class="px-6 py-8 bg-white rounded-md shadow">
                    {{-- Title --}}
                    <div class="mb-3 block">
                        <h2 class="uppercase text-lg font-bold text-gray-800">Regular</h2>
                        <p class="text-3xl text-gray-700 font-bold">99,000 IDR <span
                                class="text-gray-400 text-base font-normal">/ Month</span></p>
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <img class="rounded h-60 w-full" src="img/undraw_pair_programming_re_or4x.svg" alt="">
                    </div>

                    {{-- List --}}
                    <div class="mb-3">
                        <ul>
                            <li class="flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </li>
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="mb-3 py-6 flex justify-center">
                        <button
                            class="px-12 py-3 bg-transparent hover:bg-green-400 border border-green-400 text-green-400 hover:text-white rounded text-base font-bold focus:outline-none focus:bg-green-400 focus:text-white">Choose
                            Plan</button>
                    </div>

                </div>

                <div class="px-6 py-8 bg-white rounded-md shadow">
                    {{-- Title --}}
                    <div class="mb-3 block">
                        <h2 class="uppercase text-lg font-bold text-gray-800">Pro</h2>
                        <p class="text-3xl text-gray-700 font-bold">149,000 IDR <span
                                class="text-gray-400 text-base font-normal">/ Month</span></p>
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <img class="rounded h-60 w-full" src="img/undraw_maker_launch_crhe.svg" alt="">
                    </div>

                    {{-- List --}}
                    <div class="mb-3">
                        <ul>
                            <li class="flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                            <li class="flex space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-gray-800">Lorem ipsum dolor sit amet.</p>
                            </li>
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="mb-3 py-6 flex justify-center">
                        <button
                            class="px-12 py-3 bg-transparent hover:bg-green-400 border border-green-400 text-green-400 hover:text-white rounded text-base font-bold focus:outline-none focus:bg-green-400 focus:text-white">Choose
                            Plan</button>
                    </div>

                </div>

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

</x-home-layout>