<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nombre_usuario' => ['required', 'string', 'max:255'],
            'direccion_usuario' => ['required', 'string', 'max:255'],
            'cedula' => ['required'],
            'celular_usuario' => ['required'],
            'foto_usuario' => ['required'],
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'nombre_usuario' => $input['nombre_usuario'],
            'apellido' => $input['apellido'],
            'direccion_usuario' => $input['direccion_usuario'],
            'cedula' => $input['cedula'],
            'celular_usuario' => $input['celular_usuario'],
            'foto_usuario' => $input['foto_usuario'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        if (User::hasFile('foto_usuario')){
            $request->file('foto_usuario')->move(public_path('img/'), $request->file('foto_usuario')->getClientOriginalName());
            $user->foto_usuario = 'img/' . $request->file('foto_usuario')->getClientOriginalName();
        
        }
        $user->assignRole('User');
        return $user;
    }
}
