<?php

namespace App\Http\Controllers;

use App\Models\Preadoption;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Calendar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PreadoptionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('lista_preadopciones'), 403);
        $preadoption = Preadoption::paginate(5);
        $datos = Pet::paginate(5);
        return view('preadoption.index', compact('preadoption', 'datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fecha = $request->fecha_solic_inic;
        
        $preadoption= new Preadoption();
        $preadoption->fecha_solic_inic = $request->fecha_solic_inic;
        $preadoption->fecha_solic_final = $request->fecha_solic_final;
        $preadoption->hora_solic_inic = $request->hora_solic_inic;
        $preadoption->hora_solic_final = $request->hora_solic_final;
        $preadoption->estado_masc = "Pre-Adopcion";
        $preadoption->id_pet = $request->id_pet;
        $preadoption->id_user = $request->id_user;
        $preadoption->save();

        DB::table('calendars')->where('start', 'end', 'hora_inicio', 'hora_final',  $fecha)->update(['count'=>'2']);;


        return redirect()->route('adopcion');
    }

    public function getPet(Pet $pet){
        $user = User::find(Auth::user()->id);
        $calendarios = Calendar::where('count',"1")->get();
        return view('preadoption.create', compact('pet','calendarios', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function show(Preadoption $preadoption)
    {

        abort_if(Gate::denies('ver_preadopcion'), 403);
        $pets = Preadoption::join('pets', 'pets.id', '=', 'preadoptions.id_pet')
        ->join('users', 'users.id', "=", 'pets.id_user')
        ->where('preadoptions.id','=', $preadoption->id)
        ->select('*')
        ->get();

        return view('preadoption.show',array('pets'=>$pets,), compact('preadoption', 'pets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Preadoption $preadoption)
    {
        abort_if(Gate::denies('editar_preadopcion'), 403);
        return view('preadoption.edit', compact('preadoption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preadoption $preadoption)
    {
        $validaciones = request()->validate([
            'fecha_solic_inic' => 'sometimes',
            'fecha_solic_final' => 'sometimes',
            'hora_solic_inic' => 'sometimes',
            'hora_solic_final' => 'sometimes',
            

           
            ]);
            if (isset($validaciones)) {
                $preadoption = new Preadoption;
                $preadoption->fecha_solic_inic = $request->fecha_solic_inic;
                $preadoption->fecha_solic_final = $request->fecha_solic_final;
                $preadoption->hora_solic_inic = $request->hora_solic_inic;
                $preadoption->hora_solic_final = $request->hora_solic_final;
                $preadoption->update();
                return redirect()->route('preadoption.show', $preadoption->id)->with('success', 'Preadopción actualizada correctamente');

            }
    }
    
    public function updateM($id)
    {
        $mascota = Preadoption::where('id', $id)->update(['estado_masc'=>"Adoptada"]);
        $pets = Preadoption::join('pets', 'pets.id', '=', 'preadoptions.id_pet')
        ->where('preadoptions.id','=', $id)
        ->update(['pets.estado'=>"Adoptada"]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preadoption  $preadoption
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $calendar = Preadoption::join('calendars', 'calendars.id', '=', 'preadoptions.id_calendar')
        ->where('preadoptions.id_pet','=', $id)
        ->update(['calendars.count'=>"1"]);

        DB::table('pets')->where('id',$id)->update(['estado'=>'Adopcion']);
        DB::delete('delete from preadoptions where id_pet = ?',[$id]);


        return back()->with('succes', 'Preadopción eliminada correctamente');
    }
}
