<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramshowController extends Controller
{
    public function index()
    {
        return view('progamshow');
    }
}