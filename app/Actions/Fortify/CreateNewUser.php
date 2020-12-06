<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
            'usuario' => ['required', 'string', 'max:255', 'unique:usuario']
        ])->validate();

        return User::create([
            'usuario' => $input['usuario'],
            'correo' => $input['correo'],
            'password' => Hash::make($input['password']),
            'nombre' => $input['nombre'],
            'apPaterno' => $input['apPaterno'],
            'apMaterno' => $input['apMaterno'],
            'telefono' => $input['telefono'],
            'tipo' => $input['tipo'],
            'estatus' => $input['estatus'],
            'noReferencia' => $input['noReferencia'],
            'gallardete' => $input['gallardete'],
            'saldoxAplicar' => $input['saldoxAplicar'],
            'fotografia' => $input['fotografia']
        ]);
    }
}
