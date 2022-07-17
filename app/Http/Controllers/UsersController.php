<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\B_bcommande;
use DB;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash;




class UsersController extends Controller
{
   

 /**********************Partie connexion client *********************/
public function login(Request $request){

                                      if($request->isMethod('post')){
                                                                      $data=$request->input(); 

                                                                     if(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'is_activated'=> 1])){

                                                                                                                                                                                 return redirect('/Compte');
                                                                                                                                                                                }
                                                                    else{

                                                                         redirect()->back()->with(['error' =>'Ces identifiants ne correspondent pas à nos enregistrements.']);
               
             
                                                                        }

                   

                                         return Redirect::back()->withErrors([ 'errorMsg','E-mail ou mot de passe incorrect. Veuillez réessayer..']);
                   
                
                                                                     }



                                       }
 /**********************Partie déconnexion client *********************/

public function logout(){
                        Session::flush();
                       return redirect('/');
                       }



      // $users=User::all(); 

    
  /*
    $users = User::select('users.Nom','users.email','users.id','users.Prenom','users.Qualite','users.type' ,'users.wilaya' ,'users.commune' 
    ,'users.Adresse' ,'users.Raisonsocial ','users.Telephone' ,'users.Fax' ,'users.is_activated ')
    ->crossJoin('_busers')
    ->where('_busers.structure','=','$user->wilaya')->get();*/

//return view('admin.List-client' ,['users'=>$users]);






public function profile(){
                         return view('front.compte.profile');
                         }

 public function display(){
                          $user=Auth::user()->id; 
                          $bcommandeuser=DB::table('b_bcommandes')->where('client_id',"=",$user)->get();
                          return view('front.compte.showlist' ,['bcommandeuser'=>$bcommandeuser]);
                         }

public function modifiableclient(Request $request,$id){
                                                      $post = User::find($id);
                                                      $user = Auth::user(); 
                                                      $user = Auth::guard('web')->user();
                                                     
                                                      $user->Nom = request()->input('Nom');
                                                      $user->Prenom =  request()->input('Prenom');     
                                                      $user->Qualite =  request()->input('Qualite');   
                                                      $user->Adresse =  request()->input('Adresse');   
                                                      $user->Raisonsocial =  request()->input('Raisonsocial');   
                                                      $user->Telephone =  request()->input('Telephone');  
                                                      $user->Fax =  request()->input('Fax'); 
                                                      $user->email =  request()->input('email');  

                                                      if($request->hasFile('image')){
                                                        $avatar = $request->file('image');
                                                        $filename = time() . '.' . $avatar->getClientOriginalExtension();
                                                       return Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
                                                        $user = Auth::user();
                                                        $user->avatar = $filename;
                                                        $user->save();
                                                    }
                                                      $user->save(); 

                                                      return back()->with('key', 'You have done successfully');
                                                    }
     
      

      

                                                   
                             
       
     

          


}

