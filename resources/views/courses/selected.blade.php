<x-home-layout>
    <div class="py-1 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col-reverse lg:grid lg:grid-cols-6 gap-4 p-6">
                <div class="lg:col-span-1">
                    <h3 class="text-gray-900 font-bold text-center">Chapter</h3>
                    <ul class="py-2">
                        @forelse ($course->detailCourse as $item)
                        <li class="block text-gray-500 hover:text-gray-700 text-base">
                            {{ $item->modul }}
                        </li>
                        @empty
                        <p>No modul found</p>
                        @endforelse
                    </ul>
                </div>
                <div class="lg:col-span-5">
                    <header class="mb-5">
                        <h1 class="inline-block text-3xl font-extrabold text-gray-900">{{ $course->judul }}</h1>
                    </header>

                    <p class="mt-2 text-lg text-gray-700">
                        {{ $course->deskripsi }}
                    </p>

                    <x-video>
                        {{ $course->video }}
                    </x-video>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layouts.footer') --}}
</x-home-layout>