<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\B_bcommande;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use Notification;
use Illuminate\Notifications\Notifiable;

use App\Notifications\NouveauxBonDeCommande;

use App\Buser;use App\BoncommandeBloc;


class BBcommandeController extends Controller
{

    protected function getDateFormat()
    {
        return 'Y-m-d H:i:s.u0';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function display(){
                             $user=Auth::user()->id; 
                             $bcommandeuser=DB::table('b_bcommandes')->where('client_id',"=",$user)->get();
                             return view('front.compte.showlist' ,['bcommandeuser'=>$bcommandeuser]);
                            }
    
/************************************************************************************   */

  public function BureauEtude(){

                              $user=Auth::user()->id;
        
                              $BureauEtude=DB::table('b_bcommandes')->where('client_id',"=",$user)->get();

                 return view('front.compte.showlistBureauEtude' ,['BureauEtude'=>$BureauEtude]);

                              }
/************************************************************************************   */

public function index(){
                       $user = Auth::guard('admin')->user();
                       $wilaya = '%'.$user->Structure.'%';
                       $str = substr($wilaya, 1,2);
                       $wila = '%'.$str.'%';


                       if($user->privileges_id == '2')//Régionale DR
                                                                   {
                                                                    $user = Auth::guard('admin')->user();
                                                                    $wilaya = '%'.$user->Structure.'%';
                                                                    
                                                                    $str = substr($wilaya, 1,2);
                                                 $bcommande=B_bcommande::where('b_bcommandes.CodeWilaya',"=", $str)->orderBy('created_at','desc') ->get();
                                                 return view('admin.List-bcommande' ,['bcommande'=>$bcommande]);
     
        
                                                                  }
                                                                   if($user->privileges_id == '1')//locale agence

                                                                                                 { 
                                                                                                     
                                                                                                  $user = Auth::guard('admin')->user();
                                                                                                   $wilaya = '%'.$user->Structure.'%';
                                                                    
                                                                                                      $str = substr($wilaya, 1,2);
  
                                                                    $bcommande=B_bcommande::where('b_bcommandes.CodeWilaya',"=",$str)->orderBy('created_at','desc')
                                                                                            ->get();
                                                                                return view('admin.List-bcommande' ,['bcommande'=>$bcommande]);

                                                                                                  }
                        else //Nationale agence DR
                           $bcommande=B_bcommande::orderBy('created_at','desc')->get();
                           return view('admin.List-bcommande' ,['bcommande'=>$bcommande]);  
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
    
    /**
     * Display the specified resource.
     *
     * @param  \App\B_bcommande  $b_bcommande
     * @return \Illuminate\Http\Response
     */
    public function show($id)
                             {
                             $user = User::find($id);
                             $bcommande = B_bcommande::where("client_id", "=", $user->id)->get();

                    return view('admin.List-bcommandeUser' ,['bcommande'=>$bcommande]);
       
                             }
    
    public function showPDF($id)
                                {
       
                                $bcommande = B_bcommande::where("b_bcommandes.code", "=",$id) ->orderBy('code', 'desc')->get();
                                $bbloc=BoncommandeBloc::where("boncommande_blocs.bcommande_code", "=",$id) ->get();
                              return view('admin.teste-imprime' ,['bcommande'=>$bcommande],['bbloc'=>$bbloc]);
       
                                }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\B_bcommande  $b_bcommande
     * @return \Illuminate\Http\Response
     */
    public function edit(B_bcommande $b_bcommande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\B_bcommande  $b_bcommande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, B_bcommande $b_bcommande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\B_bcommande  $b_bcommande
     * @return \Illuminate\Http\Response
     */
    public function destroy(B_bcommande $b_bcommande)
    {
        //
    }

    
    


    public function ajouter_Busers(){


        return view('admin.ajouter_Busers');
    }

   public function filteradvancedBC(Request $request){ 
    $intitule_proj=$request->intitule_proj;
    $bureau_etud=$request->bureau_etud;

$maitre_oeuv=$request->maitre_oeuv;
$Wilaya=$request->role;

$qualité=$request->qualité;
$wilaya =$request->country;
$commune=$request->state;

$structure=$request->structure;
    $str = substr($structure, 0,2);



$data=  B_bcommande::query();
if( $request->structure){

    $data = $data->where('CodeWilaya', 'LIKE', "%" . $str . "%");

    }
if( $request->country){

         $data = $data->where('CodeWilaya', 'LIKE', "%" . $wilaya . "%");

         }

if( $request->state){

           $data = $data->where('CodeCommune', 'LIKE', "%" . $commune . "%");

           }
if( $request->intitule_proj){

              $data = $data->where('intitule_proj', 'LIKE', "%" . $intitule_proj . "%");

              }
if( $request->bureau_etud){

                  $data = $data->where('bureau_etud', 'LIKE', "%" . $bureau_etud . "%");

                  }
$bcommande = $data->paginate(10);


return view('admin.List-bcommande' ,['bcommande'=>$bcommande]); 


                                                          }



    public function filteradvancedBCC(Request $request){
                                         $intitule_proj=$request->intitule_proj;
                                              $bureau_etud=$request->bureau_etud;
       
                                         $maitre_oeuv=$request->maitre_oeuv;
                                         $Wilaya=$request->role;
       
                                         $qualité=$request->qualité;
                                          $wilaya =$request->country;
                                          $commune=$request->state;

                                         
    
   
   $data=  B_bcommande::query();
                           if( $request->country){
   
                                                   $data = $data->where('CodeWilaya', 'LIKE', "%" . $wilaya . "%");

                                                   }

                             if( $request->state){

                                                     $data = $data->where('CodeCommune', 'LIKE', "%" . $commune . "%");

                                                     }
                            if( $request->intitule_proj){
   
                                                        $data = $data->where('intitule_proj', 'LIKE', "%" . $intitule_proj . "%");
     
                                                        }
                          if( $request->bureau_etud){
   
                                                            $data = $data->where('bureau_etud', 'LIKE', "%" . $bureau_etud . "%");
         
                                                            }
                         $bcommande = $data->paginate(10);
  
   return view('admin.List-bcommandeUser' ,['bcommande'=>$bcommande]);
   
                                               }

}
