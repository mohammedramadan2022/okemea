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
            "mobile" => [
                'required', 'unique:users,mobile', function ($attribute, $value, $fail) {
                    $countryCode = $this->input('country_code');
                    $isValid = preg_match('/^5\d{8}$/', $value);

                    if ($countryCode === '966' && !$isValid) {
                        $fail('The mobile number must start with "5" followed by 8 digits for the selected country code.');
                    }
                },
            ],
        ];
    }
}
