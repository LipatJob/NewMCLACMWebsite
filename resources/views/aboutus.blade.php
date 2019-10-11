@extends('templates.base')
@section('title', 'Activities')
@section('content')
<link rel="stylesheet" href="{{ asset('css/activities.css') }}">
<div class="container my-5">
        <h5>About MCL ACM Student Chapter</h5>
        <div class="m-5 ">
                <div class="row">
                    <div class="col-6">
                        <img src="{{URL('/images/mclacmlogo.gif')}}" class="" style="width: 100%">
                    </div>
                    <div class="col-6 p-4 align-middle">
                        <div class="shadow-sm p-4">
                            <h5>Visit Us At</h5>
                            <a href="https://www.facebook.com/acmMCL/">facebook.com/acmMCL</a> <br>
                            <a href="https://twitter.com/acm_MCL">@acm_mcl</a> <br>
                            <a href="https://www.instagram.com/acm_mcl">instagram.com/acm_mcl</a> <br>

                        </div>
                        <div class="py-5">
                            <p>The Malayan Colleges Laguna ACM Student Chapter is an interest organization in Malayan Colleges Laguna. It was founded on August 13, 2018 and was recognized on October26, 2018</p>
                        </div>
                </div>
            </div>
         
        </div>  
</div>
<style>
    #navaboutus{
        color:#91C2D3;
    }
</style>
       
@endsection

