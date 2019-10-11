@extends('templates.master')
@section('title', 'Members')
@section('main')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/members.css') }}">


<div class="">
    <h4 class="my-5">Sponsor</h4>
    <div class="mx-5 shadow-sm">
        <div class="row">
            <div class="col-6">
                <img src="{{URL('/images/000.jpg')}}" id="itemimage">
            </div>
            <div class="col-6 p-4 align-middle">
                <div>
                        <p id="name">Kikuchi, Khristian</p>
                        <p id="position">Sponsor/Adviser</p>
                        <p id="committee">Executive Committee</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
        <h4 class="my-5">Officers</h4>
        <div class="mx-5 shadow-sm">
            <div class="row">
                <div class="col-6">
                    <img src="{{URL('/images/001.jpg')}}" id="itemimage">
                </div>
                <div class="col-6 p-4 align-middle">
                    <div>
                            <p id="name">Disonglo, John</p>
                            <p id="position">President</p>
                            <p id="committee">Executive Committee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div>
    <h5 class="my-5">Members</h5>
    <table class="table " style="width: 100%" id="members">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Committee</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <th scope="row">{{$member->LastName, $member->FirstName}}</th>
                <td>{{$member->Committee}}</td>
                <td>{{$member->Role}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#members').DataTable();
    } );
</script>

<style>
    #navmembers{
        color:#91C2D3;
    }
</style>
@endsection

@section('sidebar')
<ul class="nav flex-column my-5" id="">
    <li class="nav-item"><a class="nav-link" href=""> Sponsor</a></li>
    <li class="nav-item"><a class="nav-link" href=""> Officers</a></li>
    <li class="nav-item"><a class="nav-link" href=""> Members</a></li>
</ul>
@endsection