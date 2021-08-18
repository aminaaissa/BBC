<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagence;use Carbon\Carbon;
use App\User;
use DB;
class EchartController extends Controller
{
    //
    
    public function echart(Request $request)
    {
        
        $groups =User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
        //satatic
        
        for ($i=0; $i<=count($groups); $i++) {
        $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        // Prepare the data for returning with the view
        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
           
        $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
          
             $data = [];
         
             foreach($record as $row) {
                $data['label'][] = $row->day_name;
                $data['data'][] = (int) $row->count;
              }
         
            $data['chart_data'] = json_encode($data);
      
            


            
    	return view('echart',compact('chart'));
    }
}
