@extends('layouts.app')

@section('content')
    <div class="container content">
        <div class="tour-show">
            <h1>{{ $tour->name }}</h1>
            <ul class="tab">
                <li class="active"><a href="#activity">{{ trans('message.activity') }}</a></li>
                <li><a href="#booking">{{ trans('message.booking') }}</a></li>
                <li><a href="#review">{{ trans('message.review') }}</a></li>
            </ul>
            <div id="activity" class="tabcontent">
                <div class="tour-detail">
                    <div class="activity-body">
                        @foreach($activities as $activity)
                            <p>{{ $activity->image }}</p>
                            <p>{{ $activity->content }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="booking" class="tabcontent">
            </div>
            <div id="review" class="tabcontent">
            </div>
        </div>
    </div>
@endsection
