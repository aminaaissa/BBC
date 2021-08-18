<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Buser;use DB;use Auth;use App\User;use App\B_bcommande;
use Illuminate\Support\Facades\Hash;
class BusersController extends Controller
{
    //
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
    
         $users=User::where('users.wilaya',"=", $str)
          ->orderBy('created_at','desc') ->get();
        
    /*
    
        $users=DB::select("SELECT  users.Nom,users.email,users.id,users.Prenom,users.Qualite,users.type ,users.wilaya ,users.commune 
        ,users.Adresse ,users.Raisonsocial ,users.Telephone ,users.Fax ,users.is_activated 
           FROM   users
            CROSS JOIN _busers
         where users.wilaya  like ? ", [$wila]);*/
                return view('admin.List-client' ,['users'=>$users]);
    
    
    }
    if($user->privileges_id == '1')//locale agence
    
    { 
        $user = Auth::guard('admin')->user();
       // return   $user->Nom_DR;
       // return 'locale agence';
       
        $users=User::where('users.wilaya',"=", $str) ->orderBy('created_at','desc') 
        ->get();
        return view('admin.List-client' ,['users'=>$users]);
    }
      else 
      $users=User::orderBy('created_at','desc')->get();
      return view('admin.List-client' ,['users'=>$users]);
    }


public function filteradvancedBUseres(Request $request){

                                                         $Matricule=$request->Matricule;

                                                         $Nom=$request->Nom;
                                                          $Prénom=$request->Prénom;
                                                          $bagence=$request->country;

                                                                //Service
                                                                 // Structure
                                                                   // Fonction
    
                           $data=  Buser::query();

                           if( $request->Matricule){

                                                   $data = $data->where('Matricule', 'LIKE', "%" . $request->Matricule . "%");

                                                   }
                             if( $request->Nom){

                                                   $data = $data->where('Nom', 'LIKE', "%" . $request->Nom . "%");

                                                }
                              if( $request->Prénom){

                                                     $data = $data->where('Prénom', 'LIKE', "%" . $request->Prénom . "%");

                                                    }
                                                    if( $request->country){

                                                      $data = $data->where('Structure', 'LIKE', "%" . $request->country . "%");
 
                                                     }
 


                                            $users = $data->orderby('created_at','DESC')->get();
                                           //$count=Rtableprincip::count();
                                              return view('admin.List-user' ,['users'=>$users]);

                                                           }

  public function filteradvancedClient(Request $request){

        $id=$request->id;
   
       $Nom=$request->Nom;
       $Prénom=$request->Prénom;
       
       $Raisonsocial=$request->Raisonsocial;
       $Wilaya=$request->role;
       
       $qualité=$request->qualité;
       $wilaya =$request->country;
       $commune=$request->state;

       $BureauEtude=$request->type;
    
   
   $data=  User::query();
   
                           if( $request->id){
   
                                              $data = $data->where('id', 'LIKE', "%" . $request->id . "%");
   
                                             }
   
                            if( $request->Nom){
   
                                             $data = $data->where('Nom', 'LIKE', "%" . $request->Nom . "%");
   
                                              }
                           if( $request->Prénom){
   
                                              $data = $data->where('Prenom', 'LIKE', "%" . $request->Prénom . "%");
   
                                                }
                           if( $request->Raisonsocial){
   
                                                $data = $data->where('Raisonsocial', 'LIKE', "%" . $request->Raisonsocial . "%");
       
                                                      }
               
                             if( $request->qualité){
   
                                              $data = $data->where('Qualite', 'LIKE', "%" . $request->qualité . "%");
               
                                                  }
                             if( $request->country){
   
                                                  $data = $data->where('wilaya', 'LIKE', "%" . $wilaya . "%");
                    
                                                  }
                       
                             if( $request->state){
   
                            $data = $data->where('commune', 'LIKE', "%" . $commune . "%");
                    
                            }
                            if( $request->type){
   
                                $data = $data->where('type', 'LIKE', "%" . $BureauEtude . "%");
                        
                                }
                                
       
   
                   
   
   $users = $data->paginate(10);
   //$count=Rtableprincip::count();
   return view('admin.List-client' ,['users'=>$users]);
   
   }

   public function filteradvancedClientB(Request $request){

    $bureau_etud=$request->bureau_etud;

    $maitre_oeuv=$request->maitre_oeuv;
    $Wilaya=$request->Wilaya;

    //Service
   // Structure
   // Fonction

$data=  B_bcommande::query();

if( $request->bureau_etud){

$data = $data->where('bureau_etud', 'LIKE', "%" . $request->bureau_etud . "%");

}
if( $request->maitre_oeuv){

    $data = $data->where('maitre_oeuv', 'LIKE', "%" . $request->maitre_oeuv . "%");

    }
    if( $request->CodeWilaya){

        $data = $data->where('CodeWilaya', 'LIKE', "%" . $request->Wilaya . "%");

        }


$bcommande = $data->paginate(10);
//$count=Rtableprincip::count();
return view('admin.List-bcommandeUser' ,['bcommande'=>$bcommande]);

}

    public function ajouter_Busers(){


        return view('admin.ajouter_Busers');
    }

    public function store(Request $request){

     //   $input = $request->all();
       // return  $input ;
       $this->validate($request,[
        'Matricule' => 'unique:_busers,Matricule',
        //'Matricule'=>'required|Matricule|unique:Matricu,le',
       // 'email' => 'required|between:3,64|email|unique:_busers',
     ]);
    // dd($request);
        $Buser= new Buser;
        
  $Buser->privileges_id =$request->privilege;
      $Buser->Matricule =$request->Matricule;
      $Buser->role_id =$request->role;
      $Buser->email =$request->email;
      $Buser->Nom =$request->Nom;
      $Buser->Nomjeunfille =$request->Nomjeunfille;
      $Buser->Prénom =$request->Prénom;
      $Buser->DirectionAntenne =$request->DirectionAntenne;
      $Buser->Service =$request->Service;
      $Buser->Fonction =$request->Fonction;
      $Buser->GroupSec =$request->GroupSec;
      $Buser->Password =$request->Password;
      $Buser->GroupSousSec =$request->GroupSousSec;
     //$Buser->DateEmbouche =$request->DateEmbouche;
    // $Buser->DateNaissance =$request->DateNaissance;

      $Buser->Sexe =$request->Sexe;
      $Buser->Civilite =$request->Civilite;
      $Buser->WilayaNaissance =$request->WilayaNaissance;
      $Buser->CommuneNaissance =$request->CommuneNaissance;
      $Buser->Nom_DR =$request->Nom_DR;
      $Buser->Structure =$request->code_ag;
      
      $Buser->save();


return Redirect::to('/filteradvancedBUseres')
->with('message', ' Utilisateure   enregistré   ');
     // return $Buser;

//$con->id_user=auth()->id();

    }


public function profile(){


return view('admin.profile');

}

public function editutilisateur(Request $request,$Matricule){

    

    $post = Buser::find($Matricule);
    $user = Auth::user(); 
    $user = Auth::guard('admin')->user();
   // return $user=$user->Nom;
  
     $user->Nom = request()->input('Nom');
    $user->email =  request()->input('email');     
    
    $user->password = Hash::make($request->get('password'));

 
            $user->save();
      

      //  $user->password=$request->input('password');

        $user->save();
        return back()->with('key', 'You have done successfully');

            
           //   return $user = User::findOrFail($Matricule);
              // $use = Buser::find($Matricule);
           //   return $request->all();

}
public function modifeusers($Matricule){
  $modif=   Buser::where('Matricule',$Matricule)->first();
 
  return view('admin.modifeusers',compact('modif'));
}

public function modiff(Request $request,$Matricule){
  $post = Buser::find($Matricule);
  $user = Auth::user(); 
  $user = Auth::guard('admin')->user();
 // return $user=$user->Nom;

   $user->Matricule = request()->input('Matricule');
   $user->email = request()->input('email');
   $user->role_id = request()->input('role');
   $user->privileges_id = request()->input('privilege');

   $user->Nom_DR = request()->input('Nom_DR');
   $user->Structure = request()->input('code_ag');
   $user->password = request()->input('password');
   $user->Nom = request()->input('Nom');
   $user->Nomjeunfille = request()->input('Nomjeunfille');  $user->Nom = request()->input('Nom');
   $user->Prénom = request()->input('Prénom');

   //$user->SousStructure = request()->input('SousStructure');
   $user->DirectionAntenne = request()->input('DirectionAntenne');
   $user->Service = request()->input('Service');
   $user->Fonction = request()->input('Fonction');
   $user->WilayaNaissance = request()->input('WilayadeNaissance');
   //$user->SousStructure = request()->input('SousStructure');
   $user->DateEmbouche = request()->input('DateEmbouche');
   $user->GroupSousSec = request()->input('GroupSousSec');
   $user->GroupSec = request()->input('GroupSec');
   $user->Civilite = request()->input('Civilité');
   //$user->Modifutilisateur=$user;
   $user->DateNaissance = request()->input('DateNaissance');
   $user->GCProAdministratif = request()->input('GCProAdministratif');
   $user->GCProTEchnique = request()->input('GCProTEchnique');
   $user->GCProSecretariat = request()->input('GCProSecretariat');
   $user->GCProDirecteur = request()->input('GCProDirecteur');
   $user->GCProAvancement = request()->input('GCProAvancement');
   $user->GCPro_DGP = request()->input('GCPro_DGP');
   $user->GCProAdministratif = request()->input('GCProAdministratif');
   $user->GCProEcheance = request()->input('GCProEcheance');
   $user->GCProTEchnique = request()->input('GCProTEchnique');

   $user->GED = request()->input('GED');
   $user->GEDConsultation = request()->input('GEDConsultation');
   $user->GCProTEchnique = request()->input('GCProTEchnique');
   $user->GEDpw = request()->input('GEDpw');
   $user->GEDvalidation = request()->input('GEDvalidation');

   $user->save();
  


   return Redirect::to('/filteradvancedBUseres')
   ->with('message', ' Utilisateure   enregistré   ');


}
public function destroy($Matricule)
{
    //
  Buser::where('Matricule',$Matricule)
   ->delete();
  return back();

}

public function desactive(Request $request,$id){

    $users=USer::find($id);
    $users->is_activated=0;
    $users->save();
    return back(); 
    }
    
    public function active(Request $request,$id){
    
        $users=USer::find($id);
        $users->is_activated=1;
        $users->save();
        return back(); 
    
    
    
    }
}
