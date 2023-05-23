<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreName extends Controller
{
    function storeName(Request $request){
        $name = $request->input('name');
        return "My name is $name";
    }
}
