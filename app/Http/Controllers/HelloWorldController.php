<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    
    public function index() {
        $output = 6 + 10;

        $output = [
            "output"=> $output,
        ];

        return view("welcome", $output);
    }

    public function calculate(Request $request) {
        $output = $request->input("a") + $request->input("b");

        $output = [
            "output"=> $output,
        ];

        return view("welcome", $output);
    }

}