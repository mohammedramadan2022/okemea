<?php

namespace App\Http\Requests\Admin\Cities;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name'=>['required' , 'string' , 'unique:cities,name'],
            'country_id'=>['required' , 'exists:countries,id']
        ];
    }
}
