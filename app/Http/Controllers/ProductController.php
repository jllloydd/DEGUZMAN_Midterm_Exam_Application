<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        return view('movies')
            ->with('topone', 'Everything Everywhere All at Once')
            ->with('toptwo', 'Hereditary')
            ->wtih('topthree', 'Boss Baby')
            ->with('topfour', 'The Emoji Movie')
            ->with('topfive', 'Shrek');
    }
}
