<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use function Laravel\Prompts\search;

class CountryController extends Controller
{
    public function ajaxGetCountryCities(Request $request , $countryId){
        if ($request->filled('city_id')){

            $city_id =$request->city_id;
        }else{

            $city_id = 0;
        }

        $cities = City::where('country_id' , $countryId)->get();

        $view = view('Web::cities.cities-render', compact('cities' ,'city_id' ))->render();

        return response()->json(['status' => true, 'view' => $view]);

    }
}
