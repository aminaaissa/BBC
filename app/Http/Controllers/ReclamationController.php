<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    //

    function index(){
        return view('front.compte.RéclamationClient.index');
    }
}
