<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\detailCourse;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'isPro' => 'required|numeric',
            'thumbnail' => 'required|image|file|max:5120',
            'video' => 'required|string'
        ]);

        $newThumbnail = time() . '-' . $request->judul . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('img/courses'), $newThumbnail);

        Course::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isPro' => $request->isPro,
            'thumbnail' => $newThumbnail,
            'video' => $request->video,
        ]);

        return redirect()->route('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $user = Auth::user();

        /**
         * Cek apakah course ini butuh langganan atau tidak
         */
        if ($course->isPro == 1) {
            if ($user->subscription->status == 1) {
                return view('courses.selected', [
                    'course' => $course
                ]);
            } else {
                return redirect()->route('pricing');
            }
        }

        if ($course->isPro == 0) {
            return view('courses.selected', [
                'course' => $course
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('dashboard.edit', [
            'courses' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detail(Course $course, detailCourse $detailcourse)
    {
        return view('courses.selected', [
            'data' => $detailcourse,
            'course' => $course
        ]);
    }
}
