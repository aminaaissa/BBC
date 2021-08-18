<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class B_bcommande extends Model
{
    //
    protected $guarded= ['code'];
    protected $primaryKey = 'code';

    protected $table = 'b_bcommandes';
  /*  public function getDateFormat(){
        return 'Y-d-m';
    }*/
    public function getDateFormat() {
      return 'Y-d-m H:i:s.v';
  }
  
  public function B_bcommande(){


    return $this->belongTo(B_bcommande::class,'bcommande_code','code');
  }
}
