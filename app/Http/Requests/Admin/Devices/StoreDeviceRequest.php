<?php

namespace App\Http\Requests\Admin\Devices;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeviceRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required' ,'unique:devices,name'],
            'warranty' => ['required' ,'numeric'],
            'status' => ['required' ,'in:active,inactive']
        ];
    }
}
