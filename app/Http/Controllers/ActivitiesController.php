<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\activities;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ActivitiesController extends Controller
{

    public function index()
    {
        /* 
            To future developers,

            I am so sorry

            Sincerely yours,
            Job :)
            
        */
        $years=DB::table('activities')->select(DB::raw('YEAR(Date) as year'))->where('Date',">=",Carbon::now())->groupBy('year')->get();
        $upcoming=array();
        
        foreach ($years as $year) {
            $months=DB::table('activities')->select(DB::raw('YEAR(Date) as year'),DB::raw('MONTH(Date) as month'))->where('Date',">=",Carbon::now())->whereYear('date',($year->year))->groupBy('month','year')->get();
            $monthActivity=array();
            foreach ($months as $month) {
                array_push($monthActivity,['activities'=>DB::table('activities')->select("Title","Description","ImagePath")->where('Date',">=",Carbon::now())->whereYear('date',($year->year))->whereMonth('date',$month->month)->get(),'month'=>$month->month]);
            }
            array_push($upcoming,['months'=>$monthActivity,'year'=>$year->year]);

        }


        $years=DB::table('activities')->select(DB::raw('YEAR(Date) as year'))->where('Date',"<",Carbon::now())->groupBy('year')->get();
        $previous=array();
        
        foreach ($years as $year) {
            $months=DB::table('activities')->select(DB::raw('YEAR(Date) as year'),DB::raw('MONTH(Date) as month'))->whereYear('date',($year->year))->where('Date',"<",Carbon::now())->groupBy('month','year')->get();
            $monthActivity=array();
            foreach ($months as $month) {
                array_push($monthActivity,['activities'=>DB::table('activities')->select("Title","Description","ImagePath")->whereYear('date',($year->year))->whereMonth('date',$month->month)->where('Date',"<",Carbon::now())->get(),'month'=>$month->month]);
            }
            array_push($previous,['months'=>$monthActivity,'year'=>$year->year]);

        }

        return view('activities',['previous'=>$previous,'upcoming'=>$upcoming]);
    }

}