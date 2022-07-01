<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $user = $this->route('user');
        return [
            'name' => 'required',
            // Logic for findOrFail
            // 'username' => 'unique:users,username,'.$this->user.'|required',
            'username' => ['required', 'min:3' ,'unique:users,username,' . $user->id],
            'email' => ['required', 'unique:users,email,' . request()->route('user')->id],
            'password' => 'sometimes' //aveces

            
        ];
        if (isset($user -> $foto_usuario)) {
            $image_path = public_path().'/img/'.$user->foto_usuario;
            unlink($image_path);

            $foto_usuario = $request->file('foto_usuario');
            $foto_usuario->move('img/', $foto_usuario->getClientOriginalName());
            $user->foto_usuario = $foto_usuario->getClientOriginalName();
        }
    }
}
