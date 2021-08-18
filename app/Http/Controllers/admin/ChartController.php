<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use Redirect,Response;
Use DB;
use Carbon\Carbon;
class ChartController extends Controller
{
    //

    public function dashboard(){


        return view('admin.echart');
    }
    public function  index(){
        

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


        /////////
        $groups = DB::table('b_bcommandes')
        ->select('created_at', DB::raw('count(*) as total')) ->whereYear('created_at', date('M'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('total', 'age')->all();

$chart = new Chart;
$chart->labels = (array_keys($groups));
$chart->dataset = (array_values($groups));
$chart->colours = $colours;
return view('charts.index', compact('chart'));
        return view('admin.echart', $data,$chart);
        }

    
   
}
