@extends('templates.base')
@section('title', 'Home')
@section('content')

<style>
  #navhome{
    color:#91C2D3;
  }
</style>

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<div class="" style="width: 100%;">
  <img id="banner" src="{{URL('/images/mclacmbanner.gif')}}" alt="">
  <div class="col">
      <div class="row px-5">
          <div class="col-lg-6 col-md-12">
            <div class="m-5">
              <h4>Upcoming Activities</h4>
              
              @forelse ($activities as $activity)
              
              <div class="shadow my-3" id="homeitem">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <img src="images/{{$activity->ImagePath}}" id="itemimage" alt="image">
                  </div>
                  <div class="col-lg-6 col-md-6 p-3">
                    <div class="p-3">
                      <p><b>{{$activity->Title}}</b></p>
                      <p>{{$activity->Description}}</p>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="col-12" align="center">
                <h5 class="p-5">Stay tuned for future activities!</h5>
              </div>
              @endforelse
            </div>
            
            
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="m-5">
              <h4>Announcements</h4>
              
              @forelse ($announcements as $announcement)
              
              <div class="shadow my-3" id="homeitem">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <img src="images/{{$announcement->ImagePath}}" id="itemimage" alt="image">
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="p-3">
                      <p><b>{{$announcement->Title}}</b></p>
                      <p>{{$announcement->Description}}</p>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="col-12" align="center">
                <h5 class="p-5">Stay tuned for future announcements!</h5>
              </div>
              @endforelse
            </div>
            
            
          </div>
        </div>
  </div>
  
</div>
</div>

@endsection