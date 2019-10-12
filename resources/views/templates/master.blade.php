@extends('templates.base')
@section('content')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">

<div class="container mt-3">
    <div class="row p-2">
            <div class="col-lg-9 col-md-3 col-sm-12">
                    @yield('main')
                </div>
                <div class="col-lg-3 col-md-3 d-none d-md-block" id="sidebar">
                    @yield('sidebar')
                </div>
    </div>

</div>
@endsection
