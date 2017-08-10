@extends('layouts.app')
@section('content')
    <div class="container list-course-container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group container-subject">
                    @foreach($subjects as $subject)
                        <a href="#" class="list-group-item"><?=$subject['name']?></a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 course-container">
                <div class="col-md-4 box-course">
                    <img src="/img/icon/house-icon.png" alt="">
                    <br>
                    <span>?<= $subjects[0]->courses['name'] ?></span>
                </div>
                <div class="col-md-4 box-course">
                    <img src="/img/icon/house-icon.png" alt="">
                    <br>
                    <span><?= $subjects[0]->courses['name'] ?></span>
                </div>
                <div class="col-md-4 box-course">
                    <img src="/img/icon/house-icon.png" alt="">
                    <br>
                    <span><?= $subjects[0]->courses['name']?></span>
                </div>
                <div class="col-md-4 box-course">
                    <img src="/img/icon/house-icon.png" alt="">
                    <br>
                    <span><?= $subjects[0]->courses['name'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <h1>List Course</h1>
@endsection