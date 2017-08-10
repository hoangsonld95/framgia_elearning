<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function getSubjects() {
        $data = Subject::get();

        return view('admin.contents.subjects', ['data' => $data]);
    }

    public function editSubject(Request $request) {



    }

    public function deleteSubject($subject_id) {
        // If subject is deleted, all the course will be deleted too

        $deletedCourse = \App\Models\Course::where('subject_id', '=', $subject_id)->delete();
        $deletedSubject = Subject::where('id', '=', $subject_id)->delete();

        return redirect()->route('admin_subjects');
    }
}