<?php
/**
 * Created by PhpStorm.
 * User: dinhky
 * Date: 12/08/2017
 * Time: 13:52
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Question;
use App\Models\QuestionType;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index() {
        $list_question = Question::all();
        foreach ($list_question as $question) {
            $question->course = Course::where('id', $question->course_id)->first();
            $question->type = QuestionType::where('id', $question->question_type_id)->first();
        }
        return view('admin.contents.questions', ['list_question' => $list_question]);
    }
    public function editQuestion($question_id) {
        $question = Question::where('id', $question_id)->first();
        $question->list_answer = Answer::where('question_id', $question_id)->get();
        $question->type = QuestionType::where('id', $question->question_type_id)->first();
        $question->course = Course::where('id', $question->course_id)->first();
        $list_course = Course::all();
        $list_type = QuestionType::all();
        return view('admin.contents.editQuestion', ['question' => $question, 'list_type' => $list_type, 'list_course' => $list_course]);
    }
    public function deleteQuestion($question_id) {
        Answer::where('question_id', $question_id)->delete();
        Question::where('id', $question_id)->delete();
        return redirect()->back();
    }
}
