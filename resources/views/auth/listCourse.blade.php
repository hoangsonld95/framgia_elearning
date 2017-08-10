@extends('layouts.app')
@section('content')
    <div class="container list-course-container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group container-subject">
                    @foreach($subjects as $subject)
                        <a href="#" class="list-group-item"><?= $subject['name']?></a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1 course-container">
                @foreach($subjects[0]->courses as $course)
                    <a href="">
                        <div class="col-md-4">
                            <div class="box-course">
                                <img src="/img/icon/house-icon.png" alt="">
                                <span><?= $course->name ?></span>
                            </div>
                        </div>
                    </a>
                @endforeach
                @foreach($subjects[0]->courses as $course)
                    <a href="">
                        <div class="col-md-4">
                            <div class="box-course">
                                <img src="/img/icon/house-icon.png" alt="">
                                <span><?= $course->name ?></span>
                            </div>
                        </div>
                    </a>
                @endforeach
                    @foreach($subjects[0]->courses as $course)
                        <a href="">
                            <div class="col-md-4">
                                <div class="box-course">
                                    <img src="/img/icon/house-icon.png" alt="">
                                    <span><?= $course->name ?></span>
                                </div>
                            </div>
                        </a>
                    @endforeach
            </div>
        </div>
    </div>
@endsection