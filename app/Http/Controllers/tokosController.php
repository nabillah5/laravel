<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tokos;
use Auth;

class tokosController extends Controller
{
    public function Index (){
        $tokos = tokos::get();
        return view('tokos', [
            'tokos' => $tokos
        ]);
    }
    
}
