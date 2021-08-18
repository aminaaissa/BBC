<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\BMaitre_ouvrage;use DB;


class BMaitreOuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

 $bmaitre=DB::table('bmaitre_ouvrages')->get();

return view('admin.List-BMaitre_ouvrage' ,['bmaitre'=>$bmaitre]);
    }
    
    public function filterBMaitre_ouvrage(Request $request){
        
                $code=$request->code;
        
                $nom=$request->nom;
                $Bwilaya_code=$request->Wilaya;
                $commune=$request->commune;
                $dr=$request->dr;
                
              
        
        $data=  BMaitre_ouvrage::query();
        
        if( $request->code){
        
            $data = $data->where('code', 'LIKE', "%" . $request->code . "%");
        
            }
            if( $request->nomNom){
        
                $data = $data->where('nom', 'LIKE', "%" . $request->nom . "%");
        
                }
                if( $request->Wilaya){
        
                    $data = $data->where('Bwilaya_code', 'LIKE', "%" . $request->Wilaya . "%");
        
                    }
                    if( $request->commune){
                        
                                    $data = $data->where('commune', 'LIKE', "%" . $request->commune . "%");
                        
                                    }

         if( $request->dr){
                        
                                    $data = $data->where('Nom_DR', 'LIKE', "%" . $request->dr . "%");
                        
                                    }
        
        $bmaitre = $data->paginate(10);
        //$count=Rtableprincip::count();
        return view('admin.List-BMaitre_ouvrage' ,['bmaitre'=>$bmaitre]);
        
            }

    /**
     * Show the form for creating a new resource.filterBMaitre_ouvrage
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
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function show(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function edit(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BMaitre_ouvrage  $bMaitre_ouvrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BMaitre_ouvrage $bMaitre_ouvrage)
    {
        //
    }
}
