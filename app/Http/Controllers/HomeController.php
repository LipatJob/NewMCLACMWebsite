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
        $upcoming=activities::get()->where('Date', '>=', Carbon::now())->sortBy("Date")->first();
        $announcement=achievements::get()->sortByDesc("Date")->first();
        return view('home',['announcement'=>$announcement,'upcoming'=>$upcoming]);
    }

}