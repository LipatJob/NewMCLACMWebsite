@extends('templates.base')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<div class="" style="">
  <div class="row">
    <div class="col-12">
      <img id="banner" src="{{URL('/images/mclacmbanner.gif')}}" alt="">
    </div>
    <div class="col-12">
        <div class="row px-5">
            <div class="col-lg-6 col-md-12">
              <div class="m-5">
                <h4>Upcoming Activities</h4>
                <div class="shadow-sm" id="homeitem">
                  <div class="row">
                    @if ($upcoming!= null)
                    <div class="col-lg-6 col-md-6">
                    <img src="images/{{$upcoming->ImagePath}}" id="itemimage" alt="image">
                    </div>
                    <div class="col-lg-6 col-md-6 p-3">
                        <div class="p-3"> 
                            <p><b>{{$upcoming->Title}}</b></p>
                            <p>{{$upcoming->Description}}</p>
                        </div>
                    </div>
                    @else
                    <div class="col-12" align="center">
                      <h5 class="p-5">Stay tuned for future activities!</h5>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="m-5">
                <h4>Announcements</h4>
                <div class="shadow-sm" id="homeitem">
                  <div class="row">
                    @if ($announcement!= null)
                    <div class="col-lg-6 col-md-6">
                    <img src="images/{{$announcement->ImagePath}}" id="itemimage" alt="image">
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="p-3">
                          <p><b>{{$announcement->Title}}</b></p>
                          <p>{{$announcement->Description}}</p>
                      </div>
                    </div>
                    @else
                    <div class="col-12" align="center">
                      <h5 class="p-5">Stay tuned for future announcements!</h5>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<style>
  #navhome{
    color:#91C2D3;
  }
</style>
@endsection