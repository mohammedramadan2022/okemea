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
                        $fail('الجوال يجب ان يبدأ ب 5 متبوعا ب 8 ارقام');
                    }
                },
            ],
        ];
    }



    public function messages(): array
    {
        return [

            'name.required'         => 'الاسم مطلوب',
            'email.required'        => 'البريد الاكترونى مطلوب',
            'email.unique'          => 'البريد الاكترونى مستخدم من قبل',
            'country_id.required'   => 'برجاء اختيار الدوله',
            'city_id.required'      => 'برجاء اختيار المدينة',
            'country_code.required' => 'برجاء اختيار كود الدولة',
            'mobile.required'       => 'الجوال مطلوب',
            'mobile.unique'       => 'الجوال مستخدم من قبل',

        ];



    }
}
