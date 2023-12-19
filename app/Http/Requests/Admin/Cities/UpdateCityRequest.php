<?php

namespace App\Http\Requests\Admin\Cities;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
{

    public function rules(): array
    {
        $id = $this->route('city');
        return [
            'name'=>['required' , 'string' , 'unique:cities,name,'.$id],
            'country_id'=>['required' , 'exists:countries,id']
        ];
    }
}
