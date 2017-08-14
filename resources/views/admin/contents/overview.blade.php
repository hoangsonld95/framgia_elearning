@extends('admin.layout')

@section('overview')

    {{ HTML::style('/assets/bower/glyphicons/fonts/glyphicons-halflings-regular.woff') }}
    {{ HTML::style('/css/main.css') }}
    {{ HTML::style('/css/plugins.css') }}
    {{ HTML::style('/css/themes.css') }}
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

                <div class="media-container">
                    <!-- Intro -->
                    <section class="site-section site-section-light site-section-top" style="background-color: brown">
                        <div class="container">
                            <h1 class="text-center animation-slideDown"><i class="fa fa-building-o"></i> <strong>E-Learning Framgia</strong></h1>
                            <h2 class="h3 text-center animation-slideUp"><strong>Designed by BK-Team</strong></h2>
                        </div>
                    </section>
                    <!-- END Intro -->

                    <!-- Gmaps.js (initialized in js/pages/about.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                    <div id="gmap-top" class="media-map" style="height: 329px;"></div>
                </div>

                <br>
                <br>



                <div class="site-block animation-fadeIn" >

                    <h3 class="site-heading" style="text-align: center; font-weight: bold">VỀ E-LEARNING FRAMGIA</h3>
                    <p style="text-align: center; font-weight: bold; font-size: large">Bao gồm các khoá học tiếng Anh từ cơ bản đến nâng cao. Được thiết kế để mang đến trải nghiệm người dùng tốt nhất</p>
                    <p style="text-align: center; font-weight: bold; font-size: large">Framgia E-Learning bao gồm 4 khoá học : </p>
                    <br>
                    <p style="text-align: center; font-weight: bold; font-size: large">I. Tiếng Anh Cơ Bản</p>
                    <p style="text-align: center; font-weight: bold; font-size: large">II. Tiếng Anh Nâng Cao</p>
                    <p style="text-align: center; font-weight: bold; font-size: large">III. Tiếng Nhật Cơ Bản</p>
                    <p style="text-align: center; font-weight: bold; font-size: large">IV. Tiếng Nhật Nâng Cao</p>

                    <br>

                </div>


                <p style="text-align: center; font-size: 40px">THÔNG SỐ HIỆN TẠI</p>

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


            </section>
        </section>

@endsection