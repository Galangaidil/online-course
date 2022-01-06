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
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form action="{{ route('create') }}" method="post">
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
                                <x-input id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi"
                                    :value="old('deskripsi')" required />
                            </div>

                            <!-- Thumbnail -->
                            <div class="mt-4">
                                <x-label for="thumbnail" :value="__('Thumbnail')" />
                                <x-input id="thumbnail" class="block mt-1 w-full" type="text" name="thumbnail"
                                    :value="old('thumbnail')" required />
                            </div>

                            <!-- Video -->
                            <div class="mt-4">
                                <x-label for="video" :value="__('Video')" />
                                <x-input id="video" class="block mt-1 w-full" type="text" name="video"
                                    :value="old('video')" required />
                            </div>

                            <div class="mt-4 flex items-center justify-between">
                                <a class="text-sm text-red-500 hover:text-red-700" href="{{ route('dashboard') }}">
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
