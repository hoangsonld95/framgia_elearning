<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Framgia E-Learning</title>

    {{ HTML::style('/css/admin-login.css') }}

</head>
<body>
<div class="vid-container">
    <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop>
        <source src="http://mazwai.com/system/posts/videos/000/000/109/webm/leif_eliasson--glaciartopp.webm?1410742112" type="video/webm">
    </video>
    <div class="inner-container">
        <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
            <source src="http://mazwai.com/system/posts/videos/000/000/109/webm/leif_eliasson--glaciartopp.webm?random=1" type="video/webm">
        </video>
        {!! Form::open(['route' => 'admin_login', 'method' => 'post']) !!}
        {{ csrf_field() }}
        <div class="box">
            <h1>Login</h1>
            {!!Form::text('username', "", ['placeholder' => 'Username'])!!}
            {!!Form::password('password', ['placeholder' => 'Password'])!!}
            <button type="submit">
                @lang('auth.sumbit-login')
            </button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</body>
</html>