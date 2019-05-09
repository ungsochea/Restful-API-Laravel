<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function country(){
        return response()->json(Country::get(),200);
    }

    public function coutryByID($id){
        return response()->json(Country::find($id),200);
    }

    public function countrySave(Request $request){
        $country = Country::create($request->all());
        return response()->json($country,201);
    }
}
