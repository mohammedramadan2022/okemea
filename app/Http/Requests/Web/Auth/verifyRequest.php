<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class verifyRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "verify1" => ['required'],
            "verify2" => ['required'],
            "verify3" => ['required'],
            "verify4" => ['required'],
        ];
    }
}
