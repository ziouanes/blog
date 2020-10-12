<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tours extends Controller
{
    public function showString()
    {
        return view('layouts.tourGrid');;
    }
}
