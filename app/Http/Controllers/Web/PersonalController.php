<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Personal\UpdatePersonalInformationRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PersonalController extends Controller
{
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

}
