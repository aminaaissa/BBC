<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('routes',function(){
\Artisan::call('route:list');
return "<pre>". \Artisan::output();


});


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
   /* Route::get('/', function () {
        return view('index');
    });*/


	Route::get('rr',function(){
		
            $ip = Request::ip();
            return view('welcome', compact('ip'));
        });
	
});

//Auth::routes();
/************************************************************************************ Route Partie Web *** **********************************************************************  */

Route::get('/countrystate', 'Wilayacommune@index');
Route::get('getstatelist', 'Wilayacommune@getStates');
Route::get('getstructurelist', 'Wilayacommune@getstructurelist');


/**************Partie Web */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/log', 'HomeController@show')->name('index');
Route::get('/création', 'Auth\RegisterController@show')->name('index');
Route::post('/register', 'Auth\RegisterController@store')->name('register.store');
//Route::post('/registerClient', 'Auth\RegisterController@storeee')->name('register.store');
Route::match(['get','post'],'/registerClient','Auth\RegisterController@storeee');
Route::get('validation/{user}/{token}','Auth\RegisterController@validation');
Route::post('login-user','UsersController@login');
Route::get('/Compte','CompteController@index');
Route::get('/logout-compte','UsersController@logout');

Route::post('/saveBon','BBClientController@store');
Route::get('/showPDF/{id}','BBClientController@showPDF')->name('boncom.showPDF');
Route::get('/documentsigneEnvoyer/{id}','BBClientController@documentsigneEnvoyer')->name('documentsigneEnvoyer');

//Route::get('/chargerdocument','BBClientController@chargerdocument')->name('boncom.chargerdocument');

Route::get('/chargerdocument/{code}','BBClientController@chargerdocument')->name('boncom.chargerdocument');


Route::post('/uploadsigne/{code}','BBClientController@uploadsigne')->name('boncom.uploadsigne');


Route::get('/ajouter_bon_new','CompteController@ajouter_bon_new');

Route::get('/ajouter_bon','CompteController@ajouter_bon');
Route::get('/list_bbcommandeClient','UsersController@display');
Route::get('/list_BureauEtudeClient','BBClientController@BureauEtude');
Route::get('/profile-client', 'UsersController@profile');

Route::post('/modifiableclient/{id}','UsersController@modifiableclient');



Route::get('/reclamation', 'ReclamationController@index');



Route::match(['get','post'],'/admin','admin\AdminController@login')->name('admin.login');

/************************************************************************************ Route Partie Admin *** **********************************************************************  */

  
    Route::group(['middleware' => 'auth.admin'], function () {
                                                             Route::group(['namespace'=>'admin'],function(){
 
                                                                                                           Route::get('/admin/Dashboard','AdminController@Dashboard');
                                                                                                           Route::get('/logout','AdminController@logout');

                                                                                                           Route::get('/adminn','AdminController@index')->name('admin');
                                                                                                           Route::get('/liste_user', 'BusersController@index');
   
                                                                                                           Route::get('/filteradvancedBUseres','BusersController@filteradvancedBUseres');
                                                                                                           Route::get('/ajouter_Busers', 'BusersController@ajouter_Busers');
                                                                                                           Route::match(['get','post'],'/register-buser', 'BusersController@store');

                                                                                                           Route::get('/bbureau', 'BbureauEtudeController@index');
                                                                                                           Route::get('/BMaitre_ouvrage', 'BMaitreOuvrageController@index');
    
                                                                                                           Route::get('/filteradvancedClient', 'BusersController@filteradvancedClient');
                                                                                                           Route::get('/filterBMaitre_ouvrage', 'BMaitreOuvrageController@filterBMaitre_ouvrage');
                                                                                                           Route::get('/filteradvancedbbureau', 'BbureauEtudeController@filteradvancedbbureau');
                                                                                                           Route::get('/profile', 'BusersController@profile');
                                                                                                           Route::get('/List-client', 'BusersController@index');
   
                                                                                                           Route::post('/modifiableuser/{id}','BusersController@editutilisateur');

                                                                                                           Route::get('/deleteusers/{Matricule}', 'BusersController@destroy');
                                                                                                           Route::get('/modifeusers/{Matricule}', 'BusersController@modifeusers');
                                                                                                           
                                                                                                           Route::post('/modiff/{Matricule}', 'BusersController@modiff');

                                                                                                           Route::get('/filteradvancedClientB', 'BusersController@filteradvancedClientB');

                                                                                                           Route::get('/active/{id}', 'BusersController@active');
                                                                                                           Route::get('/desactive/{id}', 'BusersController@desactive');
                                                                                                         //  Route::get('/showPDF/{id}','BBcommandeController@showPDF')->name('boncom.showPDF');
                                                                                                         Route::get('/showBon/{id}','BBcommandeController@show')->name('boncom.show');

                                                                                                         Route::get('/filteradvancedBCC', 'BBcommandeController@filteradvancedBCC');
                                                                                                         Route::get('/filteradvancedBC', 'BBcommandeController@filteradvancedBC');

                                                                                                         
                                                                                                           Route::get('/Bcommande', 'BBcommandeController@index');
                                                                                                           Route::get('/NotificationsBC', 'NotificationController@index');
                                                                                                           Route::get('/NotificationsBCC', 'NotificationController@indexBBC');
                                                                                                           

                                                                                                           

          Route::get('/xxx', function () {
        return view('admin.static
        ');
    }); Route::get('/Privillège', function () {
        return 'page en production .....';
    });
    Route::get('/xxx', function () {
        return view('admin.static
        ');
    });

                                                                                                                  Route::get('/33', 'UsersController@index');
   
});});

/************RECEVABILITE DU DOSSIER************* */



/************ Fin RECEVABILITE DU DOSSIER************* */


/**************Partie test aléatoire ********************************************/


//Route::get('/logout','AdminController@logout');



//Route::get('/filteradvancedClient', 'UsersController@filteradvancedClient');


Route::get('/33', 'UsersController@index');


Route::get('/creatt', function () {
    return view('creatt
    ');
});



use App\Buser;
Route::get('/aa', 'admin\AdminController@aa');


Route::get('/notify', function () {
    
    $notifications = auth()->user()->unreadNotifications;

    dd( $notifications);





    $admins  = Buser::where('role_id','=','1')->get();
    
 
     $details = [
             'greeting' => 'Hi Artisan',
             'body' => 'This is our example notification tutorial',
             'thanks' => 'Thank you for visiting codechief.org!',
     ];
     foreach ($admins as $user) {
     //   $users->each->notify(new \App\Notifications\NouveauxClients($details));
        
     $user->notify(new \App\Notifications\NouveauxClients($details));
    }
 
     return dd("Done");
 });


 
 Route::get('/ ajax-subcatNatureDoc' ,function(){

    $cat_id=Input::get('cat_id');
    $subcategories =Bcommune::where('codewilaya','=',$cat_id)->get();
    return Response::json($subcategories);
 
      });

      Route::get('/echart', 'admin\chartController@index');


      Route::get('/', function () {
        return view('index');
    });
    Route::get('/testeweb', function () {
        return view('testeweb');
    });
    
    Route::get('/teste-imprime', function () {
        return view('front.compte.teste-imprime');
    });

    /****teste globale */

    Route::get('/page', function () {
        return view('admin.pageG');
    });