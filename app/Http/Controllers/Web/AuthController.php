<?php

namespace App\Http\Controllers\Web;

use App\Facades\SMS\Taqnyat;
use App\Facades\Traits\HelperTrait;
use App\Http\Requests\Web\Auth\RegisterRequest;
use App\Http\Requests\Web\Auth\verifyRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Model
{
    use HasFactory;
    use HelperTrait;

    public function showLoginForm()
    {
        $countries = Country::all();
        return view('Web::auth.login', compact('countries'));
    }


    public function postLogin(Request $request)
    {
        $credentials = $request->only('mobile', 'password');
        $user = User::where('mobile', $request->mobile)->first();

        if ($user) {
            $verificationCode = $this->generateRandomNumber(4);
//            Taqnyat::send($user->country_code.$user->mobile, $verificationCode , $user->name);

            $user->update(['verification_code' => $verificationCode]);
            //send mobile code
            Alert::success('مرحبا', 'ادخل كود التحقق المرسل لجوالك');

            return redirect()->route('auth.verifyLogin', $user);
        } else {

            Alert::error('عذرا', 'لا يوجد حساب مسجل لهذا الرقم');

            return back()->with('error', 'wrong mobile');
        }

    }


    public function verifyLogin($userId)
    {
        $user = User::findorFail($userId);

        return view('Web::auth.verifyLogin', compact('user'));
    }


    public function register()
    {


        $countries = Country::all();
        return view('Web::auth.register', compact('countries'));

    }

    public function postRegister(RegisterRequest $request)
    {

        $user = User::create($request->validated());

        $verificationCode = $this->generateRandomNumber(4);
//        Taqnyat::send($user->country_code.$user->mobile, $verificationCode , $user->name);
        $user->update(['verificati  on_code' => $verificationCode]);
        Alert::success('مرحبا', 'ادخل كود التحقق المرسل لجوالك');
        return redirect()->route('auth.verifyLogin', $user);

    }

    public function postVerifyLogin(verifyRequest $request)
    {

        $user = User::findOrFail($request->user_id);
        $verification_code = $request->verificationCode;
        if ($verification_code == $user->verification_code) {
            Auth::guard('web')->loginUsingId($user->id);
            return redirect('guarantees');
        }
        Alert::error('عذرا', 'كود التحقق خاطىء');

        return back();

    }


    public function logout()
    {

        Auth::logout();

        return redirect()->route('/');


    }

}
