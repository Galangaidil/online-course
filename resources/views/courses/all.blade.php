<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="mb-6">
        <img class="rounded-t-md"
            src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="" />
    </div>

    <div class="mb-4 px-4">
        <span class="text-green-600 bg-green-200  rounded-full px-4 py-2">Web Development</span>
    </div>

    <div class="px-4 border-b border-blue-100 mb-3">
        <div class="mb-3">
            <h1 class="text-xl font-semibold text-blue-600">{{ $course->judul }}</h1>
        </div>
        <div class="mb-3">
            <p class="text-gray-500">{{ $course->deskripsi }}</p>
        </div>
    </div>

    <div class="mb-3 px-4">
        <div class="mb-1 flex text-gray-400 space-x-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
              </svg>
              <span>sekitar 13 jam pembelajaran</span>
        </div>
        <div class="flex text-gray-400 space-x-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
              </svg>
              <span>10.000 siswa belajar disini</span>
        </div>
    </div>

</div>