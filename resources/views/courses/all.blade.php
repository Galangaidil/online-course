<div class="max-w-sm rounded overflow-hidden shadow-2xl relative">
    <a href="/courses/{{ $course->slug }}">
        <div class="mb-6">
            <img class="rounded-t-md"
                src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
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