<?php

namespace App\Http\Controllers\Web;

use App\Facades\SMS\Taqnyat;
use App\Facades\Traits\HelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Personal\UpdatePersonalInformationRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PersonalController extends Controller
{
    use HelperTrait;
    public function personalInformation(Request $request)
    {

        $countries = Country::get();
        return view('Web::personal.personal-information', compact('countries'));
    }

    public function updatePersonalInformation(UpdatePersonalInformationRequest $request)
    {
        auth()->user()->update($request->except('_token', 'mobile'));

        Alert::success("تهانينا", 'تم تحديث البيانات بنجاح');
        return back();

    }

    public function ajaxSendVerificationCode(Request $request){

        $verificationCode =$this->generateRandomNumber(4);

//        Taqnyat::send($request->country_code.$request->mobile, $verificationCode , auth()->user()->name);


        return response()->json(['status' => true, 'message' => __('code sent successfully')]);

    }

}
