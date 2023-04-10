<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barangs;
use Auth;

class barangsController extends Controller
{
    public function Index (){
        $barangs = barangs::get();
        return view('barangs', [
            'barangs' => $barangs
        ]);
    }
    
}
