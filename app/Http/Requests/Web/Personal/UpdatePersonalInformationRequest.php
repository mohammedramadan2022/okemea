<?php

namespace App\Http\Requests\Web\Personal;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalInformationRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "name" => ['required'],
            "email" => ['required', 'unique:users,email,'.auth()->user()->id],
            "country_id" => ['required', 'exists:countries,id'],
            "city_id" => ['required', 'exists:cities,id'],
            "country_code" => ['required'],
            "mobile" => ['required', 'unique:users,mobile,'.auth()->user()->id],
        ];
    }
}
