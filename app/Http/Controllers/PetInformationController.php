<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetInformationController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {

        return view('informacionmasc');

    }

    public function informacionmasc($id)
    {
        $pets = Pet::findOrFail($id);

        return view('informacionmasc', compact('pets'));
    }
   

}
