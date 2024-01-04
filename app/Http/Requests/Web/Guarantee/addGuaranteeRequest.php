<?php

namespace App\Http\Requests\Web\Guarantee;

use Illuminate\Foundation\Http\FormRequest;

class addGuaranteeRequest extends FormRequest
{

    public function rules(): array
    {

return [
            "device_id" => ['required'],
            "purchase_date" => ['required','before:today'],
            "invoice_image" => ['required'],
            "image" => ['required'],
            "carton_image" => ['required'],
            'city_id' => ['required', 'exists:cities,id'],

        ];
    }

    public function messages() : array {


        return array (
'device_id.required'     => 'برجاءاختيار الجهاز',
'purchase_date.required' => 'برجاء ادخال تاريخ الشراء',
'purchase_date.before' => 'برجاء ادخال تاريخ سابق لتاريخ اليوم',
'invoice_image.required' => 'برجاء ادخال  صوره الفاتورة',
'image.required'         => 'برجاء ادخال  صوره الجهاز',
'carton_image.required'  => 'برجاء ادخال  صوره الكرتونة',
'city_id.required'       => 'برجاء اختيار المدينة',


        );
    }
}
