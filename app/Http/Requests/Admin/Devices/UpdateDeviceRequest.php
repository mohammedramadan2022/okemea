<?php

namespace App\Http\Requests\Admin\Devices;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceRequest extends FormRequest
{

    public function rules(): array
    {

        $id = $this->route('device');

        return [
            'name' => ['required' ,'unique:devices,name,'.$id],
            'warranty' => ['required' ,'numeric'],
            'status' => ['required' ,'in:active,inactive']
        ];
    }
}
