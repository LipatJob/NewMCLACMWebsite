<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class AchievementsController extends Controller
{

    public function index()
    {
        $years=DB::table('achievements')->select(DB::raw('YEAR(Date) as year'))->get();
        $achievements=array();
        
        foreach ($years as $year) {
            $months=DB::table('achievements')->select(DB::raw('YEAR(Date) as year'),DB::raw('MONTH(Date) as month'))->groupBy('month','year')->get();
            $monthActivity=array();
            foreach ($months as $month) {
                array_push($monthActivity,['achievements'=>DB::table('achievements')->select("Title","Description","ImagePath")->whereMonth('date',$month->month)->get(),'month'=>$month->month]);
            }
            array_push($achievements,['months'=>$monthActivity,'year'=>$year->year]);

        }
        return view('achievements',['achievements'=>$achievements]);
    }

}