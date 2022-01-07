<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg lg:text-xl text-gray-800 leading-tight text-center lg:text-left">
            {{ __('Create New Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="max-w-md mx-auto">
                        <x-auth-validation-errors class="mb-4 bg-red-100 p-4 rounded-lg" :errors="$errors" />

                        <form action="{{ route('create') }}" method="post">
                            @csrf

                            <!-- Judul -->
                            <div>
                                <x-label for="judul" :value="__('Judul')" />
                                <x-input id="judul" class="block mt-1 w-full" type="text" name="judul"
                                    :value="old('judul')" required autofocus />
                            </div>

                            <!-- slug -->
                            <div class="mt-4">
                                <x-label for="slug" :value="__('Slug')" />
                                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')"
                                    required />
                            </div>

                            <!-- Deskripsi -->
                            <div class="mt-4">
                                <x-label for="deskripsi" :value="__('Deskripsi')" />
                                <textarea id="deskripsi" name="deskripsi"
                                    class="mt-1 resize-none w-full h-32 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('deskripsi') }}</textarea>
                            </div>

                            <!-- Cost -->
                            <div class="mt-4">
                                <x-label for="cost" :value="__('Cost')" />
                                <select name="isPro" id="cost"
                                    class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="0">Free</option>
                                    <option value="1">Pro</option>
                                </select>
                            </div>

                            <!-- Thumbnail -->
                            <div class="mt-4">
                                <x-label for="thumbnail" :value="__('Thumbnail')" />
                                <x-input id="thumbnail"
                                    class="block mt-1 w-full shadow-none border border-gray-300 px-3 py-1.5 text-gray-500"
                                    type="file" name="thumbnail" :value="old('thumbnail')" required />
                            </div>

                            <!-- Video -->
                            <div class="mt-4">
                                <x-label for="video" :value="__('Video ID')" />
                                <div class="flex">
                                    <div
                                        class="mt-1 flex items-center justify-center w-full text-xs text-gray-900 bg-gray-200 rounded-tl rounded-bl rounded-r-none">
                                        https://www.youtube.com/embed/</div>
                                    <x-input id="video" class="block mt-1 w-full rounded-l-none" type="text"
                                        name="video" :value="old('video')" required />
                                </div>
                            </div>

                            {{-- Submit button --}}
                            <div class="mt-4 flex items-center justify-between">
                                <a class="text-sm bg-red-100 px-4 py-2 rounded-md text-red-500 hover:text-red-700"
                                    href="{{ route('dashboard') }}">
                                    {{ __('Cancel') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Create') }}
                                </x-button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
