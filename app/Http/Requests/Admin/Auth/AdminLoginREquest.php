<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{

    public function rules(): array
    {

        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
