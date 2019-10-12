<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\achievements;
use App\Models\activities;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index()
    {
        $maxItems=10;
        $activities=activities::get()->where('Date', '>=', Carbon::now())->sortBy("Date");
        $announcements=achievements::get()->sortByDesc("Date");
        return view('home',['announcements'=>$announcements,'activities'=>$activities]);
    }

}