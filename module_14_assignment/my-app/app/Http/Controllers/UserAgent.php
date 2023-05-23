<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAgent extends Controller{
    function userAgent(Request $request){
        $userAgent = $request->header('User-Agent');
        return 'User-Agent: ' . $userAgent;
    }
}
