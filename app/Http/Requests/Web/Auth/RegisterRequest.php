<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "name" => ['required'],
            "email" => ['required', 'unique:users,email'],
            "country_id" => ['required', 'exists:countries,id'],
            "city_id" => ['required', 'exists:cities,id'],
            "country_code" => ['required'],
            "mobile" => ['required', 'unique:users,mobile'],
        ];
    }
}
