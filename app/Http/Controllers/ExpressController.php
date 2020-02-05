<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpressController extends Controller
{
    function index() {
        $packages = [
            'id' => 1,
            'name' => 'Latif'
        ];

      return view('app')->with('packages', $packages);  
    }
}
