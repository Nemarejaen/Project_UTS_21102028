<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihan01 extends Controller
{
    function home(){
        return view('beranda');
    }

    function alat(){
        return view('alat');
    }

    function koding(){
        return view('code');
    }

    function skema(){
        return view('skematik');
    }
}
