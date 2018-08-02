<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('message.title')</title>
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style('css/slick.css') }}
    {{ Html::style('css/fontawesome.min.css') }}
    {{ Html::style('css/home.css') }}
</head>
<body>
    <div id="app">
        <div class="top-header">
            <div class="col-md-6 social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
            </div>
            <div class="search-tour col-md-6">
                {!! Form::open(['url' => '', 'class' => 'Search']) !!}
                    {!! Form::text('Search-box', null, ['id' => 'Search-box', 'class' => 'form-control Search-box', 'placeholder' => trans('message.search')]) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="header">
            <nav class="navbar navbar-laravel">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">{!! Html::image('images/ico-home.png', 'Image', ['class' => 'icon-home']) !!}</a>
                    </div>
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item"><a href="" class="nav-link">{{ trans('message.domestic') }}</a></li>
                        <li class="nav-item"><a href="" class="nav-link">{{ trans('message.foreign') }}</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">{{trans('message.about') }}</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">{{ trans('message.contact') }}</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ trans('message.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ trans('message.signup') }}</a>
                        </li>
                    </ul>
                </div>
            </nav> 
        </div>

        <div class="main">
            @yield('content')
        </div>
        
    </div>
    {{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/slick.min.js') }}
    {{ Html::script('js/custom-home.js') }}
</body>
</html>
