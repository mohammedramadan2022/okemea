<?php

namespace App\Models\Web;

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

    public function showLoginForm()
    {

        return view('Web::auth.login');
    }


    public function postLogin(Request $request)
    {
        $credentials = $request->only('mobile', 'password');
        $user = User::where('mobile', $request->mobile)->first();

        if ($user) {
            $user->update(['verfaication_code' => 1234]);
            //send mobile code
            Alert::success('مرحبا', 'ادخل كود التحقق المرسل لجوالك');

            return redirect()->route('auth.verifyLogin', $user);
        } else {

            Alert::error('عذرا', 'جوال خاطىء');

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
        $user->update(['verification_code' => 1234]);
        Alert::success('مرحبا', 'ادخل كود التحقق المرسل لجوالك');
        return redirect()->route('auth.verifyLogin', $user);

    }

    public function postVerifyLogin(verifyRequest $request)
    {

        $user = User::findOrFail($request->user_id);
        $verification_code = $request->verify1.$request->verify2.$request->verify3.$request->verify4;
        if ($verification_code == $user->verification_code) {
          Auth::guard('web')->loginUsingId($user->id);
          return redirect('/');
        }
        Alert::error('عذرا', 'كود التحقق خاطىء');

        return back();

    }


}
