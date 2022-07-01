<?php

namespace App\Http\Controllers;
use App\Models\PerfilUser;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function getUserEdit(PerfilUser $user){

        return view('perfil.edit', compact('user'));
    }

   


    public function update(Request $request, PerfilUser $user)
    {
        //$user = User::findOrFail($id);
        //$data = $request->only('name', 'apellido', 'direccion_usuario', 'cedula', 'celular_usuario', 'foto_usuario', 'username', 'email');

        $validaciones = request()->validate([
            'nombre_usuario' => 'sometimes|string|min:3|max:30',
            'apellido' => 'sometimes|string|min:3|max:30',
            'direccion_usuario' => 'sometimes|string|max:50',
            'cedula' => 'sometimes|max:10',
            'celular_usuario' => 'sometimes|max:11',
            'foto_usuario'=> 'sometimes|mimes:jpg,jpeg,bmp,png',
            'username'=> 'sometimes|string|min:3|max:20',
            'email'=> 'sometimes|email',
            'password'=> 'sometimes',
            ]);
            if (isset($validaciones)) {
                $user->nombre_usuario = $request->nombre_usuario;
                $user->apellido = $request->apellido;
                $user->direccion_usuario = $request->direccion_usuario;
                $user->cedula = $request->cedula;
                $user->celular_usuario = $request->celular_usuario;
                $user->username = $request->username;
                $user->email = $request->email;
                $password = request('password');
                $hashed = Hash::make($password);
                $user->password = $hashed;
                if($request->hasFile('foto_usuario')){
                    $foto_usuario = $request->file('foto_usuario');
                    $nombrefoto=$foto_usuario->getClientOriginalName();
                    $foto_usuario->move('img/fotos',$nombrefoto);
                    $user->foto_usuario = $nombrefoto;
                }

         //if(trim($request->password)=='')
        // {
        //     $data=$request->except('password');
        /// }else{
        //     $data=$request->all();
         //    $data['password']=bcrypt($request->password);
        // }
        $user->update();

        return redirect()->route('perfil.show', $user->id)->with('success', 'Usuario actualizado correctamente');
         }
     }

     public function perfil($id)
     {
         $preadoption = Pet::findOrFail($id);

         return view('perfil', compact('preadoptionts'));
     }

    // public function getFundations(User $user){
       // $foundations = User::role('Foundation')->get();
   
      //  return view('perfil.show',compact('foundations'));
     //  }
  
 
 


}
