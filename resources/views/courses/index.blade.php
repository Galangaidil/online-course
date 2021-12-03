<x-home-layout>
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-light text-blue-900">
                Courses
            </h1>
        </div>
    </header>

    <div class="py-6">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg flex items-center justify-center">
                <div class="py-12">
                    @each('courses.all', $courses, 'course', 'courses.empty')
                </div>
            </div>
        </div>
    </div>

</x-home-layout>