<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
    <a class="navbar-brand px-5" href="{{URL('/')}}">
      <img src="{{URL('/images/mcllogo.png')}}" width="50" height="50" class="d-inline-block align-top">
      <img src="{{URL('/images/acmlogo.png')}}" width="50" height="50" class="d-inline-block align-top">
    </a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-3 px-5" id="navbarSupportedContent">
      
      <ul class="navbar-nav ml-auto" id="navitems">
        <li class="nav-item" >
          <a class="nav-link" id="navhome" href="{{URL('/')}}">Home</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navactivities" href="{{URL('/activities')}}">Activities</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navmembers" href="{{URL('/members')}}">Members</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navachievements" href="{{URL('/achievements')}}">Achievements</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navrulesbylaws" href="{{URL('/rulesbylaws')}}">Rules & Bylaws</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navaboutus" href="{{URL('/aboutus')}}">About us</a>
        </li>
      </ul>
    </div>
  </nav>
