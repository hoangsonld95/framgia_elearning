@extends('admin.layout')
@section('edit_question')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3 class="fa fa-edit">{{ trans('admin_questions.edit') }}</h3>
                        </header>
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="col-md-2" for="comment">Question content</label>
                                <textarea class="form-control col-md-8" rows="2" id="comment">{{$question->question_content}}</textarea>
                            </div>
                            <div class="row-fluid form-group">
                                <select class="selectpicker" data-style="btn-primary">
                                    <optgroup label="Point of question">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div>
                                <i class="glyphicon glyphicon-play-circle"></i>{{$question->description}}
                            </div>
                            <div class="row-fluid">
                                <select class="selectpicker" data-style="btn-primary">
                                    <optgroup label="Type of question">
                                        @foreach($list_type as $type)
                                            <option>{{$type->type}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>

                            <div class="row-fluid">
                                <select class="selectpicker" data-style="btn-primary">
                                    <optgroup label="Course of question">
                                        @foreach($list_course as $course)
                                            <option>{{$course->name}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            @foreach($question->list_answer as $answer)
                                <div class="form-group">
                                    <label>Answer</label>
                                    <input type="text" class="form-control" id="usr" value="{{$answer->answer_content}}">
                                    <input type="text" class="form-control" value="{{$answer->correct}}">
                                </div>
                                <br>
                            @endforeach
                        </form>

                    </section>
                </div>
            </div>
        </section>
    </section>


@endsection