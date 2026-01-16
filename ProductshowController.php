<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductshowController extends Controller
{
    public function index()
    {
        return view('productshow');
    }
}
