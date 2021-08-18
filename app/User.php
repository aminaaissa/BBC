<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
class User extends Authenticatable
{
    use Notifiable;

    protected $guard ='user';
    public function getDateFormat(){
       return 'Y-d-m H:i:s.v';

      //return 'Y-m-d H:i:s';mysql
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function setPasswordAttribute($password)
{
    $this->attributes['password'] = \Hash::make($password);
}
public function role()
{
    return $this->belongsTo('App\Role');
}

public function confirmed() {
    return $this->is_activated;
}
protected $dates = [
    'created_at',
    'updated_at',
    'DernierAccess',
    'previous_visit'
];

}
