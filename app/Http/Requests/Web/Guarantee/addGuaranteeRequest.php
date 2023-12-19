<?php

namespace App\Http\Requests\Web\Guarantee;

use Illuminate\Foundation\Http\FormRequest;

class addGuaranteeRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "device_id" => ['required'],
            "purchase_date" => ['required'],
            "invoice_image" => ['required'],
            "image" => ['required'],
            "carton_image" => ['required'],
            'city_id' => ['required', 'exists:cities,id'],

        ];
    }
}
