<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name'=>['required' , 'string', 'unique:admins,name'],
            'username'=>['required' , 'string' , 'unique:admins,username'],
            'password'=>['required' , 'confirmed']
        ];
    }
}
