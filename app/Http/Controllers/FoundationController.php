<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FoundationController extends Controller
{
  
    public function index(User $user){
        
        $foundations = User::role('Fundacion')->get();
   
        return view('fundacion',compact('foundations'));
       }
  
}
