@extends('templates.master')
@section('title', 'Activities')
@section('main')
<link rel="stylesheet" href="{{ asset('css/activities.css') }}">
<h4>Achievements</h4>
@forelse ($achievements as $year)
<div class="mx-3">
    <h5 class="mb-3">{{$year['year']}}</h5>
    <div class="mx-3">
        @foreach ($year['months'] as $month)
        <h5>{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</h5>
        @foreach (($month['achievements']) as $achievement)
        <div class="m-3  shadow-sm">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/{{$achievement->ImagePath}}" id="itemimage" alt="image">
                </div>
                <div class="p-4 col-lg-6">
                    <p><b>{{$achievement->Title}}</b> </p>
                    <p>{{$achievement->Description}}</p>
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
    #navachievements{
        color:#91C2D3;
    }   
</style>
@endsection

@section('sidebar')
<ul class="nav flex-column my-5" id="">
    @foreach ($achievements as $year)
    <li class="nav-item ml-2"><a class="nav-link" href="#{{$year['year']}}">{{$year['year']}}</a></li>
        @foreach ($year['months'] as $month)
            <li class="nav-item ml-4"><a class="nav-link" href="#{{$year['year']}}{{$month['month']}}">{{ date("F", mktime(0, 0, 0, $month['month'], 1)) }}</a></li>
        @endforeach
    @endforeach
    <li class="nav-item ml-4"><a class="nav-link" href=""> October</a></li>
</ul>
@endsection