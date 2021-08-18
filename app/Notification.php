<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
   protected $dateFormat = 'Y-d-m H:i:s';
   /* protected function getDateFormat()
    {
        return 'Y-m-d H:i:s.u0';
    }*/
    protected $casts = ['data' => 'array'];
    
}
