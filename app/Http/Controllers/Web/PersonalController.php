<?php

namespace App\Http\Controllers\Web;

use App\Facades\SMS\Taqnyat;
use App\Facades\Traits\HelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Personal\UpdatePersonalInformationRequest;
use App\Models\Country;
use App\Models\User;
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

        if (auth()->user()->verification_code == $request->verification_code) {

            auth()->user()->update($request->except('_token', 'verification_code'));
            Alert::success("تهانينا", 'تم تحديث البيانات بنجاح');

        } else {
            Alert::error("عذرا", 'كود تفعيل خاطىء');
        }
        return back();
    }

    public function ajaxSendVerificationCode(Request $request)
    {

        $verificationCode = $this->generateRandomNumber(4);
        $user_id = $request->user_id ?? auth()->user()->id;
        $user = User::findOrFail($user_id);
//        Taqnyat::send($user->country_code.$user->mobile, $verificationCode, $user->name);
        $user->verification_code = $verificationCode;
        $user->save();
        return response()->json(['status' => true, 'message' => __('code sent successfully')]);

    }

}
