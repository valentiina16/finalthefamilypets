<?php

namespace App\Http\Controllers;
use App\Models\Preadoption;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Calendar;
use Illuminate\Http\Request;



class AdoptController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request )
    {

        
        $calendarios = Calendar::where('count',"1")->get();

      //  $pet = Pet::filter($request)->get();
        $pet = Pet::where('estado', 'Adopcion')->get();
        return view('adopcion', array('pet' => $pet), compact('calendarios'));
}
public function store(Request $request)
    {
        $pet = Pet::where('id', $request->id_pet)->update(['estado'=>"Pre-Adopcion"]);
        $user = Auth::id();
        $preadoption= new Preadoption();
        $preadoption->fecha_solic_inic = $request->fecha_solic_inic;
        $preadoption->fecha_solic_final = $request->fecha_solic_final;
        $preadoption->hora_solic_inic = $request->hora_solic_inic;
        $preadoption->hora_solic_final = $request->hora_solic_final;
        $preadoption->estado_masc = "Pre-Adopcion";
        $preadoption->id_pet = $request->id_pet;
        $preadoption->id_user = $user;
        $preadoption->id_calendar = $request->id_calendar;
        $preadoption->save();

        $calendar = Calendar::where('id', $request->id_calendar)->update(array('count'=>"2"));
        return redirect()->route('adopcion');
    }

    public function pet()
    {
        $pet = Pet::all();

        return view('adopcion', compact('pet'));
    }


}
