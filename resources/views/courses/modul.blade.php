<x-home-layout>
    <div class="py-1 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col-reverse lg:grid lg:grid-cols-6 gap-4 p-6">
                <div class="lg:col-span-1">
                    <h3 class="text-gray-900 font-bold text-center lg:text-left">Chapter</h3>
                    <ul class="py-2">
                        @forelse ($chapter->detailCourse as $item)
                        <li class="block text-gray-500 hover:text-blue-500 hover:bg-blue-100 rounded text-lg py-1 px-3">
                            <a href="/courses/{{ $chapter->slug }}/{{ $item->slug }}">{{ $loop->index + 1 }} {{ $item->chapter }}</a>
                        </li>
                        @empty
                        <p>No modul found</p>
                        @endforelse
                    </ul>
                </div>
                <div class="lg:col-span-5">
                    <header class="mb-5">
                        <h1 class="inline-block text-3xl font-extrabold text-gray-900">{{ $data->chapter }}</h1>
                    </header>

                    <x-video>
                        {{ $data->video }}
                    </x-video>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>