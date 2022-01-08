<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg lg:text-xl text-gray-800 leading-tight text-center lg:text-left">
            {{ __('Selamat datang ') . Auth::user()->name }}
        </h2>
        <div class="mt-4">
            <a class="px-4 py-2 rounded bg-blue-600 text-white text-sm" href="{{ route('showCreateForm') }}">New</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Aktivitas Belajar
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
