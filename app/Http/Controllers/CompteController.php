<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
class CompteController extends Controller
{
    //
    public function index(){


        $currentUser    =Auth::guard('web')->user()->id; 

      

     
                                                   

        $static2 = DB::select("SELECT client_id,nom_wilaya,nom,COUNT(*)as nombre FROM [espace_client2].[dbo].b_bcommandes   as bbc
        inner join bwilayas as b
                                on b.CODE_Wilaya=bbc.CodeWilaya
                                inner join users as u
                                on u.id=bbc.client_id
where client_id= $currentUser 
        group by client_id ,nom_wilaya,nom");
       // return $static2;
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $data = [];
     
        
     foreach($static2 as $row) {
            $data['label'][] = $row->nom_wilaya;
            $data['coun'][] = $row->nombre;
            $data['data'][] = (int) $row->nombre;
          }
        $data['chart_data'] = json_encode($data);

       
        return view('front/compte/indexNew',$data);
    }

    public function ajouter_bon_new(){

        return view('front/compte/ajouter_bon_new');   
       // return view('front/compte/ajouter_bon');

    }
}
