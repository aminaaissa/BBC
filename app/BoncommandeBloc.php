<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoncommandeBloc  extends Model
{
    //
    protected $guarded= ['id'];

    public function details(){


        return $this->hasMany(BoncommandeBloc::class,'bcommande_code','code');
      }
}
