<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageQuery extends Controller{
    public function pageQuery(Request $request){
        $page = $request->input('page', null);
        return response()->json([
            'message' => 'API endpoint response',
            'page' => $page,
        ]);
    }
}
