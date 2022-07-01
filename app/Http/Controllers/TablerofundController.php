<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Preadoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TablerofundController extends Controller
{
    public function index(){
        abort_if(Gate::denies('tablero_fundacion'), 403);
        $preAdop = Preadoption::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

            $months = Preadoption::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

            $datas = array(0,0,0,0,0,0,0,0,0,0,0,0,0);

            foreach ($months as $index => $month){
                $datas[$month] = $preAdop[$index];
            }

            $pet = Pet::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

            $months = Pet::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

            $datas2 = array(0,0,0,0,0,0,0,0,0,0,0,0,0);

            foreach ($months as $index => $month){
                $datas2[$month] = $pet[$index];
            }

       return view('tablerofund', compact('datas', 'datas2'));
    
    }
}

