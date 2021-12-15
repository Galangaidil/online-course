<div class="max-w-sm rounded bg-white hover:bg-gray-100 overflow-hidden shadow-2xl relative">
    <a href="/courses/{{ $course->slug }}">
        <div class="mb-6">
            <img class="h-56 w-full inset-0"
                src="{{ $course->thumbnail }}"
                alt="" />
        </div>

        <div class="absolute top-0  right-0 p-4">
            <span class="text-green-600 bg-green-200  rounded-full px-4 py-2">Web Development</span>
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