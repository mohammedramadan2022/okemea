<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
{

    public function rules(): array
    {
        $id = $this->route('admin');

        $passwordRules = $this->filled('password') ? 'nullable|string|min:8|confirmed' : 'nullable';

        return [
            'name'=>['required' , 'string' , 'unique:admins,name,'.$id],
            'username'=>['required' , 'string' , 'unique:admins,username,'.$id],
            'password' => $passwordRules, // Password confirmation rule

        ];
    }
}
