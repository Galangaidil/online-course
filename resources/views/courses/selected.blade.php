<x-home-layout>
    <div class="py-1 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col-reverse lg:grid lg:grid-cols-6 gap-4 p-6">

                {{-- Sidebar --}}
                <div class="bg-gray-100 rounded-md lg:!bg-white lg:col-span-1">
                    <h3 class="text-gray-900 text-xl font-light text-center lg:text-left px-3">Chapter</h3>
                    <ul class="py-2">
                        @forelse ($course->detailCourse as $item)
                        <li>
                            <a class="block text-gray-500 hover:text-blue-500 hover:bg-blue-100 {{ Request::is('courses/'.$course->slug.'/'.$item->slug) ? 'text-blue-500 !bg-blue-100' : '' }} rounded text-lg py-1 px-3 mb-1"
                                href="/courses/{{ $course->slug }}/{{ $item->slug }}">
                                {{ $loop->index + 1 }}
                                {{ $item->chapter }}
                            </a>
                        </li>
                        @empty
                        <p>No modul found</p>
                        @endforelse
                    </ul>
                </div>

                {{-- Content --}}
                <div class="lg:col-span-5">
                    {{-- Main Content --}}
                    @if (Request::is('courses/'.$course->slug))
                    <header class="mb-5">
                        <h1 class="inline-block text-3xl font-extrabold text-gray-900">{{ $course->judul }}</h1>
                    </header>

                    <p class="mt-2 text-lg text-gray-700">
                        {{ $course->deskripsi }}
                    </p>

                    <x-video>
                        {{ $course->video }}
                    </x-video>

                    {{-- Secondary Content --}}
                    @else
                    <header class="mb-5">
                        <h1 class="inline-block text-3xl font-extrabold text-gray-900">{{ $data->chapter }}</h1>
                    </header>

                    <x-video>
                        {{ $data->video }}
                    </x-video>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-home-layout>