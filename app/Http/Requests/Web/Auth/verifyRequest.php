<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class verifyRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "verificationCode" => ['required'],

        ];
    }

    public function messages() : array {

return array(
"verificationCode.requied"=>'كود التفعيل مطلوب'


);


    }
}
