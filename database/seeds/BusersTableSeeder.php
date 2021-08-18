<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('_busers')->insert([
            'id' => '1',
            'role_id' => '1',
            
            'Matricule' => '00012', 
             'Nom' => 'ADMINISTRATEUR',
            'Nomjeunfille' => '',
            
            'Prénom' => 'INFORMATIQUE',
            'Structure' => '000',
            'DirectionAntenne' => '08',
            'Service' => '002',
            'Fonction' => '007',
            'password' => '00012',
            'GroupSec' => '003',
            'GroupSousSec' => '001',

            'CheminImagefond' => '',

            'Createutilisateur' => '00000',
            'Createdate' => Carbon::create('2000', '01', '01'),

            'Modifutilisateur' => 'MDM03',

            'Moddate' => Carbon::create('2000', '01', '01'),
            
            'DernierAccess' => Carbon::create('2000', '01', '01'),
            'NbrAcces' => '',
            'GED' => '',
            'GEDConsultation' => '',
            'GEDpw' => '',
            
            'DateEmbouche' => Carbon::create('2000', '01', '01'),
            'DateNaissance' =>Carbon::create('2000', '01', '01'),
            'Sexe' => '',
            'GCProAdministratif' => '',
            'GCProEcheance' => '',

            'GCProTEchnique' => '',
            'GCProSecretariat' => '',
            'GEDvalidation' => '',
            'PswGt' => '00012',

            'Actif' => '',
            'GEDvalidation' => '',
            'PswGt' => '',
            'Gtacces' => '',
            'PswGt' => '',
            'ArAvHeure' => '',
            'ArAprHeure' => '',
          
            'CycleHoraire' => '',
            'LieuPointage' => '',
            'GCProDirecteur' => '',
            'GCProAvancement' => '',

           
            'GCPro_DGP' => '',
            'GECPrivilege' => '',

              
            'GECPassword' => '',
            'GECPrivilege' => '',
              
            'DateModif' => Carbon::create('2000', '01', '01'),
            'DateArrivSrv' => Carbon::create('2000', '01', '01'), 



            'PrivilSignCVT' => '',
            'PrivilSignCVTNiv2' => '',
            'PrivilModifArticlesCVT' => '',
            

            'Civilite' => '',
            'PasswordGCPro' => '',
            'WilayaNaissance' => '09',


            'CommuneNaissance' => '0009',

            'GComFacturation' => '',

            'PasswordGCom' => '',
            
            'DateNaissance' =>Carbon::create('2000', '01', '01'),
            'DateModifConsolid' => Carbon::create('2000', '01', '01'),
            'PrivilModifEcheanceFhon' => '0012',
            'Nom_DR' => 'DG', 
            'GComCreances' => '',

            'SrvCrl_Tech' => '',
            
            'email_verified_at' => Carbon::create('2000', '01', '01'),
            
            
            
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
