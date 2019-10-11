<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\members;

class MembersController extends Controller
{

    public function index()
    {
        
        return view('members',['members'=>members::all()]);
    }

}