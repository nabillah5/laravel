<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admis;
use Illuminate\Http\Request;
use Auth;

class admisController extends Controller

{
    public function Index (){
        $admis = admis::get();
        return view('admis', [
            'admis' => $admis
        ]);
    }
    
}