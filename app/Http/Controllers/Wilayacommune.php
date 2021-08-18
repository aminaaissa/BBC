<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Wilayacommune extends Controller
{
    //
    public function index()
                           {
                            if($user->privileges_id == '2')//Régionale DR
                            {
                             $user = Auth::guard('admin')->user();
                             $wilaya = '%'.$user->Structure.'%';
                             
                             $str = substr($wilaya, 1,2);
                             $wilaya = DB::table('bwilayas')->where('CODE_Wilaya','=', $str)->OrderBy('nom_wilaya','ASC')->get();
                               return view('création',compact('wilaya'));

                            }
                           $wilaya = DB::table('bwilayas')->OrderBy('nom_wilaya','ASC')->get();
                               return view('création',compact('wilaya'));
                            }


         public function getStates(Request $request) {
                                                     $states = DB::table("Bcommunes")->where("codewilaya",$request->countryid)->pluck("commune","ccom");
                                                     return response()->json($states);
                                                     }


                                                           public function getstructurelist(Request $request){
                                                            $states = DB::table("Bagences")->where("code_ag",$request->countryid)->pluck("code_ag","nom_ag");
                                                            return response()->json($states);


                                                     }
}
