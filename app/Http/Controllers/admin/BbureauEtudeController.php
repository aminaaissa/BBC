<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\BbureauEtude;
use App\User;
class BbureauEtudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filteradvancedbbureau(Request $request){
        
                $code=$request->code;
        
                $nom=$request->nom;
                $Wilaya=$request->Wilaya;
                $commune=$request->commune;
                $dr=$request->dr;
                
              
        
        $data=  BbureauEtude::query();
        
        if( $request->code){
        
            $data = $data->where('code', 'LIKE', "%" . $request->code . "%");
        
            }
            if( $request->nomNom){
        
                $data = $data->where('nom', 'LIKE', "%" . $request->nom . "%");
        
                }
                if( $request->Wilaya){
        
                    $data = $data->where('Wilaya', 'LIKE', "%" . $request->Wilaya . "%");
        
                    }
                    if( $request->commune){
                        
                                    $data = $data->where('commune', 'LIKE', "%" . $request->commune . "%");
                        
                                    }

         if( $request->dr){
                        
                                    $data = $data->where('Nom_DR', 'LIKE', "%" . $request->dr . "%");
                        
                                    }
        
        $bureauE = $data->paginate(10);
        //$count=Rtableprincip::count();
        return view('admin.List-BureauEtude' ,['bureauE'=>$bureauE]);
        
            }
        
    public function index()
    {
        //

$bureauE=User::where('type','=','1')->get();

return view('admin.List-BureauEtude' ,['bureauE'=>$bureauE]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BbureauEtude  $bbureauEtude
     * @return \Illuminate\Http\Response
     */
    public function show(BbureauEtude $bbureauEtude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BbureauEtude  $bbureauEtude
     * @return \Illuminate\Http\Response
     */
    public function edit(BbureauEtude $bbureauEtude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BbureauEtude  $bbureauEtude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BbureauEtude $bbureauEtude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BbureauEtude  $bbureauEtude
     * @return \Illuminate\Http\Response
     */
    public function destroy(BbureauEtude $bbureauEtude)
    {
        //
    }
}
