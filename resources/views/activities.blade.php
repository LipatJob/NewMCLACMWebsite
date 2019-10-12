@extends('templates.master')
@section('title', 'Activities')
@section('main')
<link rel="stylesheet" href="{{ asset('css/activities.css') }}">

<h4 id="upcomingactivities">Upcoming Activities</h4>
@forelse ($upcoming as $year)
<div class="mx-3">
    <h5 class="mb-3" id="{{$year['year']}}">{{$year['year']}}</h5>
    <div class="mx-3">
        @foreach ($year['months'] as $month)
        <h5>{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</h5>
        @foreach (($month['activities']) as $activity)
        <div class="m-3  shadow-sm" id="{{$year['year']}}{{$month['month']}}">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/{{$activity->ImagePath}}" id="itemimage" alt="image">
                </div>
                <div class="p-4 col-lg-6">
                    <p><b>{{$activity->Title}}</b> </p>
                    <p>{{$activity->Description}}</p>
                </div>
            </div>
            
        </div>
        @endforeach
        @endforeach
    </div>
</div>
@empty
<p>Stay tuned for future activities!</p>
@endforelse


<h4 id="previousactivities">Previous Activities</h4>
@forelse ($previous as $year)
<div class="mx-3">
    <h5 class="mb-3" id="{{$year['year']}}">{{$year['year']}}</h5>
    <div class="mx-3">
        @foreach ($year['months'] as $month)
        <h5 id="{{$month['month']}}">{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</h5>
        @foreach (($month['activities']) as $activity)
        <div class="m-3 shadow-sm" id="{{$year['year']}}{{$month['month']}}">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/{{$activity->ImagePath}}" id="itemimage" alt="image">
                </div>
                <div class="p-4 col-lg-6">
                    <p><b>{{$activity->Title}}</b> </p>
                    <p>{{$activity->Description}}</p>
                </div>
            </div>
            
        </div>
        @endforeach
        @endforeach
    </div>
</div>
@empty
<p>Stay tuned for future activities!</p>
@endforelse


<style>
    #navactivities{
        color:#91C2D3;
    }
</style>
@endsection

@section('sidebar')
<ul class="nav flex-column my-5" id="">
    <li class="nav-item"><a class="nav-link" href="#upcomingactivities"> Upcoming Activities</a></li>
@foreach ($upcoming as $year)
    <li class="nav-item ml-2"><a class="nav-link" href="#{{$year['year']}}">{{$year['year']}}</a></li>
        @foreach ($year['months'] as $month)
            <li class="nav-item ml-4"><a class="nav-link" href="#{{$year['year']}}{{$month['month']}}">{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</a></li>
        @endforeach
@endforeach
@foreach ($previous as $year)
    <li class="nav-item ml-2"><a class="nav-link" href="#{{$year['year']}}">{{$year['year']}}</a></li>
        @foreach ($year['months'] as $month)
            <li class="nav-item ml-4"><a class="nav-link" href="#{{$year['year']}}{{$month['month']}}">{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</a></li>
        @endforeach
@endforeach
</ul>
@endsection