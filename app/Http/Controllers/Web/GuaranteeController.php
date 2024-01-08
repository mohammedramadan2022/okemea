<?php

namespace App\Http\Controllers\Web;

use App\Facades\Traits\HelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Guarantee\addGuaranteeRequest;
use App\Mail\AddDeviceMail;
use App\Models\Country;
use App\Models\Device;
use App\Models\DeviceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class GuaranteeController extends Controller
{

    use HelperTrait;

    public function guarantees()
    {
        $userDevices = DeviceUser::where('user_id',auth()->user()->id)->get();
//        dd($userDevices);
       return view('Web::guarantee.guarantees', compact('userDevices' ));

    }
    public function addGuarantee()
    {
        $devices = Device::Active()->get();
        $countries = Country::all();


        return view('Web::guarantee.add-guarantee', compact('devices', 'countries'));

    }

    public function storeGuarantee(addGuaranteeRequest $request)
    {


        $user = auth()->user();
        $device = Device::findOrFail($request->device_id);


// Create and attach a new device
        $attachedDevice = DeviceUser::create([
            'user_id' => $user->id,
            'device_id' => $device->id,
            'purchase_date' => $request->purchase_date, 'notes' => $request->notes, 'city_id' => $request->city_id
        ]);


        if ($request->hasFile('image')) {

            $image = $this->saveImage($request->image, 'user-devices/'.$attachedDevice->id);
            $attachedDevice->update(['image' => $image[0], 'file_path' => $image[2]]);
            $attachedDevice->save();
        }
        if ($request->hasFile('carton_image')) {

            $image = $this->saveImage($request->carton_image, 'user-devices/'.$attachedDevice->id);
            $attachedDevice->update(['carton_image' => $image[0], 'file_path' => $image[2]]);
            $attachedDevice->save();
        }
        if ($request->hasFile('invoice_image')) {

            $image = $this->saveImage($request->invoice_image, 'user-devices/'.$attachedDevice->id);
            $attachedDevice->update(['invoice_image' => $image[0], 'file_path' => $image[2]]);
            $attachedDevice->save();
        }


        $x = Mail::to(auth()->user()->email)->send(new AddDeviceMail(auth()->user()));
        Alert::success("تهانينا", 'تم اضافه جهازكم بنجاح');
        return redirect()->route('guarantees');



    }
}
