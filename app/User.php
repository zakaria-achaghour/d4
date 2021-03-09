<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    public const ROLES = [
        'Admin' => 'Admin',
        'Role1' => 'Role 1',
        'Role1' => 'Role 1',
        'Role1' => 'Role 1'

    ];
    public const LOCALES = [
        'en' => 'English',
        'fr' => 'French'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','firstname','lastname','gender','contact','role','', 'email', 'password',
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



    // methods to check user has roles
    public function hasAnyRoles($roles){
        if ($this->roles()->whereIn('name' , $roles)->first()) {
         return true;   
        }
        return false;

    }

    public function hasRole($role){
        if ($this->roles()->where('name' , $role)->first()) {
            return true;   
           }
           return false;
    }

    public  function chek_user($user){
        
        if( Auth::user() != $user )
           {return false;}
       else 
       {
        return true;
       } 
         
    }

}
