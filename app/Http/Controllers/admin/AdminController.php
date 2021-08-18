<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Session;
use App\Admin;use DB;
use Redirect;
class AdminController extends Controller
{
    //
    public function aa()
    {
       // $notifications= DB::table('notifications')->get();
        $notifications =  DB::table('notifications')
        ->where('type', 'App\Notifications\NouveauxClients')
        ->count();
       // dd($notifications);
            return view('users.notification.index' , compact("notifications"));
     
        
        return view('admin.dashboard',compact('notifi'));
    }

    public function __construct(){
    //  $this->middleware('auth:admin');

    }

    
    public function login(Request $request){
     if($request->isMethod('post')){
          $data=$request->input(); //dd($data);
          
          if(Auth::guard('admin')->attempt(['Matricule'=>$data['Matricule'],'password'=>$data['password']])){

            return redirect('admin/Dashboard');

          }else{
            return Redirect::back()->withErrors(['error' => '
            
            Saisissez un nom d \' utilisateur et un mot de passe valides.']);
            
          }

     }


        return view('admin.admin_login');
    }



    public function dashboard(){

 /****** afficher les nbr user par wilaya   ******/

 $user = Auth::guard('admin')->user();
 $wilaya = '%'.$user->Structure.'%';
 $str = substr($wilaya, 1,2);
 $wila = '%'.$str.'%';
 
        $static2 = DB::select("SELECT count(*) as nombre ,wilaya ,nom_wilaya FROM [espace_client2].[dbo].users as u 
        inner join bwilayas as b
        on u.wilaya =b.CODE_Wilaya 
        
        
        
        group by wilaya,nom_wilaya ");
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $data = [];
     
        
     foreach($static2 as $row) {
            $data['label'][] = $row->nom_wilaya;
            $data['data'][] = (int) $row->nombre;
          }
        $data['chart_data'] = json_encode($data);

       
        /****** afficher les nbr BBC par wilaya   ******/
        
        $staticBC = DB::select("SELECT count(*) as nombre ,wilaya ,nom_wilaya FROM [espace_client2].[dbo].users as u 
        inner join bwilayas as b
        on u.wilaya =b.CODE_Wilaya 
        group by wilaya,nom_wilaya ");
       // return $record; var cData = JSON.parse(`<?php echo $chart_data ?? ''; );
      
         $databc = [];
     
        
     foreach($staticBC as $row) {
            $databc['label'][] = $row->nom_wilaya;
            $databc['data'][] = (int) $row->nombre;
          }
        $databc['chart_data'] = json_encode($databc);

        return view('admin.echart',$data, $databc);



    }

    public function logout(){

Session::flush();
return redirect('/admin');


    }
    public function index (){

        return 'hhhh';
    }
}
