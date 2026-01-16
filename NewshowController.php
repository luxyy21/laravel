<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewshowController extends Controller
{
    public function index()
    {
        return view('newshow');
    }
}
