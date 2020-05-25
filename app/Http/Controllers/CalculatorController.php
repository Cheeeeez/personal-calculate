<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $input = $request->input;
        $result = math_eval("$input");
        $flag = true;
        return view('index', compact(['result', 'flag']));
    }
}
