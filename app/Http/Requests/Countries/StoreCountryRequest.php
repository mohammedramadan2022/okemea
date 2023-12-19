<?php

namespace App\Http\Requests\Countries;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
{
    public function rules(): array
    {
        return array(
            'name'=>['required' , 'string' , 'unique:countries,name'],
            'country_code'=>['required' , 'string' , 'unique:countries,country_code']

        );
    }
}
