@extends('admin.layout')

@section('overview')

    <!-- Main contents -->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i>{{ trans('admin_overview.dashboard') }}</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="index.html">{{ trans('admin_overview.home') }}</a></li>
                            <li><i class="fa fa-laptop"></i>{{ trans('admin_overview.dashboard') }}</li>
                        </ol>
                    </div>
                </div>

                <div class="row" id="home_page">
                    <h1 class="text-center">Welcome to Admin Page</h1>
                    <img class="img_index" src="http://www.aspiretransforms.com/wp-content/uploads/2016/01/education-banner.jpg">
                </div>

                <br>
                <br>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box blue-bg">
                            <i class="fa fa-book"></i>
                            <div class="count">{{ \App\Models\Course::get()->count() }}</div>
                            <div class="title">{{ trans('admin_overview.courses') }}</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box brown-bg">
                            <i class="fa fa-user"></i>
                            <div class="count">{{ \App\Models\User::get()->count() }}</div>
                            <div class="title">{{ trans('admin_overview.users') }}</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg">
                            <i class="fa fa-question"></i>
                            <div class="count">200</div>
                            <div class="title">{{ trans('admin_overview.multiple-choice-questions') }}</div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box green-bg">
                            <i class="fa fa-bank"></i>
                            <div class="count">{{ \App\Models\Admin::get()->count() }}</div>
                            <div class="title">{{ trans('admin_overview.administrators') }}</div>
                        </div>
                    </div>
                </div>

                <pre style="font-size: 20px">
                    Đây là trang quản trị E-Learning Framgia. Các khoá học tiếng Anh được thiết kế theo hình thức trắc nghiệm 
                </pre>

                
                

                     

                
                

            </section>
        </section>
@endsection