<div class="max-w-sm rounded bg-white hover:bg-gray-100 overflow-hidden shadow-2xl relative">
    <a href="/courses/{{ $course->slug }}">
        <div class="mb-6">
            <img class="h-48 w-full inset-0"
                src="{{ $course->thumbnail }}"
                alt="" />
        </div>

        <div class="absolute top-0 right-0 p-4">
            @if ( $course->isPro == 0 )
                <x-badge-free />
            @else
                <x-badge-pro />
            @endif
        </div>

        <div class="px-4 mb-3">
            <div class="mb-3">
                <span class="text-xl font-semibold text-blue-600">{{ $course->judul }}</span>
            </div>
            <div class="mb-3">
                <p class="text-gray-500">{{ $course->deskripsi }}</p>
            </div>
        </div>
    </a>
</div>