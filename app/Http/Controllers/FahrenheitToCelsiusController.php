<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FahrenheitToCelsiusController extends Controller
{
    public function ftoc(Request $request)
    {
        //get celcius value
        $celcius = $request->celcius;

        //convert celcius to fahrenheit
        $result = ($celcius*9/5) + 32;

        //round fahrenheit value to two decimal
        $fahrenheit = round($result, 2);

        //return fahrenheit
        return ["fahrenheit" => $fahrenheit];
    }
}
