<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;use Auth;
use DB;
class SommaireController extends Controller
{
    //

 

    public function index(){

$satatic=User::count();
$client=User::where('role_id','4')->count();


$lastff=User::orderby('created_at','desc')->take(5)->get();


//satatic




        return view('admin.dashboard',compact('satatic','client','chart'));


    }
}
