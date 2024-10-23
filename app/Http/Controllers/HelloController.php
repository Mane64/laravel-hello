<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class HelloController extends Controller
{
    //
    public function show(string $name): view{
        return view('hello', ['name'=> $name]);
    }
}
