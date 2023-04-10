<?php

namespace App\Http\NavControllers;

use Illuminate\Http\Requeat;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']) ;
    }
    
    public function user()
    {
        return view('user', ['key' => 'admis']);
    }
}