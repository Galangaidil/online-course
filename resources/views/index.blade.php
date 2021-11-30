<x-home-layout>
    <div class="py-12 bg-white border-b border-gray-200" style="background-image: url('https://images.unsplash.com/photo-1579547621706-1a9c79d5c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'); background-size: cover">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 flex flex-col lg:grid lg:grid-cols-2 lg:gap-3 lg:place-items-center">
                <div class="text-center lg:text-left">
                    {{-- Hero title --}}
                    <h1 class="font-extrabold text-5xl sm:text-6xl md:text-7xl mb-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-pink-600">Welcome to Academica</h1>

                    {{-- Secondary title --}}
                    <p class="text-lg md:text-xl text-blue-900 mb-3">Our mission is to bring a bright future to generation Z for preparation the Indonesian Golden Era in 2045.</p>

                    {{-- Call to actions --}}
                    <div class="mb-3 text-center">
                        <div class="space-y-3 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-3">
                            <a href="#" class="block w-full px-4 py-2 border border-transparent rounded-md font-semibold text-base tracking-widest transition ease-in-out duration-150 bg-purple-500 hover:bg-purple-600 text-white focus:outline-none focus:ring-2 focus:ring-offset-1 focus:border-purple-200 ring-purple-500 focus:ring-opacity-50">Get Started</a>
                            <a href="#" class="btn btn-white">Learn More</a>
                        </div>
                    </div>

                </div>

                {{-- Hero Image --}}
                <div class="mb-3 flex justify-center">
                    <img class="rounded-xl shadow" src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
                </div>
                
            </div>
        </div>
    </div>
</x-home-layout>