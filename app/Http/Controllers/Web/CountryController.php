<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function ajaxGetCountryCities($countryId){
        $cities = City::where('country_id' , $countryId)->get();

        $view = view('Web::cities.cities-render', compact('cities'))->render();

        return response()->json(['status' => true, 'view' => $view]);

    }
}
