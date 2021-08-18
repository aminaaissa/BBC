<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Buser extends Model
{
    //
    use Notifiable;
    
    protected $table = '_busers';
    

    protected $fillable = [
        'Matricule', 'email', 'password','token','DernierAccess'
    ];

    
    public function getDateFormat() {
        return 'Y-d-m H:i:s.v';
    }

    //protected $dateFormat = 'Y-d-m H:i:s';

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }

    public function username()
    {
        return 'Matricule';
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
}
