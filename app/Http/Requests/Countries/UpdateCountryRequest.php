<?php

namespace App\Http\Requests\Countries;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
{

    public function rules(): array
    {
        $id = $this->route('country');
        return [
            'name'=>['required' , 'string' , 'unique:countries,name,'.$id],
            'country_code'=>['required' , 'string' , 'unique:countries,country_code,'.$id]

        ];
    }
}
