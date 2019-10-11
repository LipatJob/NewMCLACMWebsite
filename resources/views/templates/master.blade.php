@extends('templates.base')
@section('content')
<div class="container mt-3">
    <div class="row">
            <div class="col-9">
                    @yield('main')
                </div>
                <div class="col-3" id="sidebar">
                    @yield('sidebar')
                </div>
    </div>

</div>
@endsection
