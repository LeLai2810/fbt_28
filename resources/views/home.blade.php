@extends('layouts.app')

@section('content')
    @include('layouts.header')
    <div class="content">
        <div class="tour-list container">
            <div id="list-tours">
                @foreach ($tours as $tour)
                    <div class="tour" >
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tour-domestic">{{ trans('message.domestic') }}</a></li>
                            <li><a href="MBtour">{{ trans('message.mbtour') }}</a></li>
                            <li><a href="">{{ trans('message.mttour') }}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tour-domestic" class="tab-pane fade in active">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('message.stt') }}</th>
                                            <th>{{ trans('message.name') }}</th>
                                            <th>{{ trans('message.duration') }}</th>
                                            <th>{{ trans('message.start_date') }}</th>
                                            <th>{{ trans('message.price') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $tour->id }}</td>
                                            <td>{{ $tour->name }}<br>{{ $tour->itinerary }}</td>
                                            <td>{{ $tour->duration }}</td>
                                            <td>{{ $tour->start_date }}</td>
                                            <td>{{ $tour->price }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="MBtour" class="tab-pane fade">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
