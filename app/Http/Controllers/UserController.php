<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Models\Preadoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;



class UserController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('lista_usuarios'), 403);

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $users = User::buscarpor($tipo, $buscar)->paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('crear_usuario'), 403);
        $roles = Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        //$user = User::create($request->only('name', 'apellido', 'direccion_usuario', 'cedula', 'celular_usuario', 'foto_usuario', 'username', 'email')
        //    + [
        //        'password' => bcrypt($request->input('password')),
        //]);

        $validaciones = request()->validate([
            'nombre_usuario' => 'required|string|min:3|max:30',
            'direccion_usuario' => 'required|string|max:50',
            'cedula' => 'required|max:10|unique:users',
            'celular_usuario' => 'required|max:11',
            'foto_usuario'=> 'required|mimes:jpg,jpeg,bmp,png',
            'username'=> 'required|string|min:3|max:20|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            ]);
            if (isset($validaciones)) {
                $user = new User;
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
                $foto_usuario = $request->file('foto_usuario');
                $foto_usuario->move('img/fotos', $foto_usuario->getClientOriginalName());
                $user->foto_usuario = $foto_usuario->getClientOriginalName();
                $user->save();


                $roles = $request->input('roles', []);
                $user->syncRoles($roles);
                return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');
            }



    }

    public function show(User $user)
    {
        abort_if(Gate::denies('ver_datos_usuario'), 403);
        // $user = User::findOrFail($id);
        // dd($user);
        $user->load('roles');
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('editar_usuario'), 403);
        $roles = Role::all()->pluck('name', 'id');
        $user->load('roles');
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        //$user = User::findOrFail($id);
        //$data = $request->only('name', 'apellido', 'direccion_usuario', 'cedula', 'celular_usuario', 'foto_usuario', 'username', 'email');

        $validaciones = request()->validate([
            'nombre_usuario' => 'sometimes|string|min:3|max:30',
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
                    $path = public_path().'/img/fotos/'.$user->foto_usuario;
                    unlink($path);
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
        $roles = $request->input('roles', []);
        $user->syncRoles($roles);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
         }
     }

     public function destroy(User $user){
         abort_if(Gate::denies('eliminar_usuario'), 403);

         if (auth()->user()->id == $user->id) {
             return redirect()->route('users.index');
         }

         $user->delete();
         $path = public_path().'/img/fotos/'.$user->foto_usuario;
        unlink($path);
         return back()->with('succes', 'Usuario eliminado correctamente');
     }

    // public function getUser(Request $request){
       // $user = User::find(Auth::user()->id);
      //  if(empty($user)){
      //      return redirect()->back();

      //  }if ($user->hasRole("admin")) {
       //     return view('perfiladmin.show')->with('user', $user);

        //}else{
        //    if ($request->user()->hasRole("foundation"))
        //        return redirect(route("pets.index"));
      //  }    // otro caso
        //$pets = Preadoption::filter($request)->get();
      //  $pets = Preadoption::where('id_user', $user->id)->get();

     //   return view('perfil.show', array('pets'=>$pets))->with('user', $user, 'pets', $pets);

    //}

    public function getUser(Request $request){

        $user = User::find(Auth::user()->id);
        if(empty($user)){
            return redirect()->back();

        }if ($user->hasRole("Administrador")) {
            return view('perfiladmin.show')->with('user', $user);

        //}else{
        //    if ($request->user()->hasRole("foundation"))
        //        return redirect(route("pets.index"));
        }    // otro caso
        //$pets = Preadoption::filter($request)->get();
        $pets = Preadoption::join('pets', 'pets.id', '=', 'preadoptions.id_pet')
        ->join('users', 'users.id', "=", 'pets.id_user')
        ->where('preadoptions.id_user','=', $user->id)
        ->select('*')
        ->get();
        return view('perfil.show', array('pets'=>$pets,),compact('user', 'pets'));

    }

    public function pdf(){

        $user = User::find(Auth::user()->id);
        $pets = Preadoption::join('pets', 'pets.id', '=', 'preadoptions.id_pet')
        ->join('users', 'users.id', "=", 'pets.id_user')
        ->where('preadoptions.id_user','=', $user->id)
        ->select('*')
        ->get();

         $pdf = PDF::loadview('perfil.pdf',['pets'=>$pets]);
        //$pdf->loadHTML('');
        return $pdf->stream();

        
        //return $pdf->download('__mascota.pdf');

        //return view('perfil.pdf', array('pets'=>$pets,),compact('user', 'pets'));
    }


    public function editUser(User $user){
        $user = User::find(Auth::user()->id);
        return view('perfil.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user){
        $user = User::find(Auth::user()->id);
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


    public function getAdmin(){
        $user = User::find(Auth::user()->id);
        if(empty($user)){
            return redirect()->back();
        }
        return view('perfiladmin.show')->with('user', $user);
    }



    public function getFundation(User $user){
        abort_if(Gate::denies('lista_fundaciones'), 403);

        $foundations = User::role('Fundación')->get();

        return view('foundations.index',compact('foundations'));
       }




}
