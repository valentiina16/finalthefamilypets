<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CalendarController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  abort_if(Gate::denies('user_index'), 403);
      return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
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
        //request()->validate(Calendar::$rules);
       // $evento=Calendar::create($request->all());

        $user = Auth::id();
        $event = new Calendar();
        $event->start = $request->start;
        $event->end = $request->end;
        $event->hora_inicio = $request->hora_inicio;
        $event->hora_final = $request->hora_final;
        $event->id_user = $user;
        $event->count = "1";
        $event->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $evento)
    {
        //
        $evento= Calendar::all();
        
        return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //recupero la informacio para desplegar en el formulario
        $evento=Calendar::find($id);
        //formato dia mes y año y lo pasamos a año mes y dia y no tenga hora,minutos y segundos
        //$evento->start=Carbon::createFromFormat('Y-m-d', $evento->start)->format('Y-m-d');
       // $evento->end=Carbon::createFromFormat('Y-m-d ', $evento->end)->format('Y-m-d');

       
        return response()->json($evento);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $evento)
    {
        $validaciones = request()->validate([
            'descripcion_evento' => 'sometimes',
            'start' => 'sometimes',
            'end' => 'sometimes',
            'horainicio' => 'sometimes',
            'horafinal' => 'sometimes',
           
            ]);
            if (isset($validaciones)) {
                $evento->descripcion_evento = $request->descripcion_evento;
                $evento->start = $request->start;
                $evento->end = $request->end;
                $evento->hora_inicio = $request->hora_inicio;
                $evento->hora_final = $request->hora_final;
                $evento->count = "1";
               
                $evento->update();
            }
        return response()->json($evento);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $evento=Calendar::find($id)->delete();

         return response()->json($evento);
        //
       // $calendar->delete();
        //return redirect()->route('calendars.index', $calendar->id)->with('succes', 'fundacion eliminada correctamente');
    }
}
