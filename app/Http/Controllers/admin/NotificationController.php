<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function index(){


        return view('admin.allnotif');
    }

    public function indexBBC(){


        return view('admin.allnotifBBC');
    }
    
}
