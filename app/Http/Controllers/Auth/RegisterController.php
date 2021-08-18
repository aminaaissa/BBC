<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use App\Mail\VerifyEmail;
use DB;
use App\Buser;

use Notification;
use Illuminate\Notifications\Notifiable;

use App\Notifications\NouveauxClients;
use App\Mail\WelcomUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'Nom' => $data['nom'],
            'Prenom'=>$data['Qualite'],
            'Adresse'=>$data['Adresse'],
            'Raisonsocial'=>$data['Raisonsocial'],

            'Telephone'=>$data['Telephone'],
            'Fax'=>$data['Fax'],
            'email' => $data['email'],
           // 'wilaya'=>$data['wilaya'],
           // 'commune' => $data['commune'],
           // bcrypt($data['password']),
           // 'password' => Hash::make($data['password']),
           'password' => bcrypt($data['password']),
            ''

        ]);
       


    }
    public function show(){


        return view('création');
    }

    public function storeee(){


        return view('création');


    }
    public function store(Request $request){
      //  return 'hhh';
      $request->validate([

        'email' => 'required|between:3,64|email|unique:users',

       //'password' => 'required|alphaNum|confirmed|min:6',

        ]);
        $user= new User;
        $user->Nom =$request->Nom;
        $user->token =$request->_token;
        $user->Prenom =$request->Prenom;
        $user->Qualite =$request->Qualite;
        $user->Adresse =$request->Adresse;
        $user->password =$request->password;

        $user->Raisonsocial =$request->Raisonsocial;

        $user->Telephone =$request->Telephone;
        $user->Fax =$request->Fax;
        $user->commune =$request->state;
    $user->wilaya =$request->country;
        $user->email =$request->email;
        $user->Nif =$request->nif;
        
        //$user->is_activated ='0';
        
        $user->type =$request->type;
       // $user->role_id ='5';
       
        $user->save();
        
      Mail::to($user)->send(new WelcomUser($user));
        
       

    $admins  = Buser::where('role_id','=','1')->orwhere('role_id','=','2')->get();


  
foreach ($admins as $aa) {
$aa->notify(new \App\Notifications\NouveauxClients($user));
}

//return $user;
        return redirect()->back()->with('success',"
        Nous avons envoyé le code d'activation. Veuillez vérifier votre boîte de réception  .");




    }
    public function validation($user,$token )
    {
         $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->back()
                ->with(['error' =>
                 'Votre code d activation est expiré ou invalide.']);
        }

        $user->update(['token' => null, 'is_activated' => 1]);

        return redirect()->to('/')
            ->with(['success' => '
            Toutes nos félicitations! votre compte est maintenant activé..']);
    }


}
