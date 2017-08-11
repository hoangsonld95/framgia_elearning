<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function getCourses()
    {
        $data = Course::where('hidden', 0)->get();
        $subjects = Subject::where('hidden', 0)->get();

        return view('admin.contents.courses', ['data' => $data, 'subjects' => $subjects]);
    }

    public function editCourse(Request $request)
    {
        if($request->ajax()) {
            Course::where('id', $request->id)
                    ->where('subject_id', $request->old_subject_id)
                    ->update(['name' => $request->name, 'desc' => $request->description, 'subject_id' => $request->new_subject_id]);
            return response(['msg' => $request->new_subject_id]);
        }
        else {
            return view('admin.contents.overview');
        }
    }

    public function deleteCourse($course_id)
    {
        Course::where('id', $course_id)
            ->update(['hidden' => 1]);

        return redirect()->route('admin_courses');
    }

    public function createCourse(Request $request)
    {
        if($request->ajax()) {
            Course::create([
                'name' => $request->name,
                'total_question' => 0,
                'subject_id' => $request->subject_id,
                'hidden' => false,
                'admin_id' => 1,
                'desc' => $request->description,
            ]);
            return response(['msg' => "Response ok"]);
        }
        else {
            return view('admin.contents.overview');
        }
    }
}
