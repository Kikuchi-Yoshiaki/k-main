<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    //追加！
    protected $fillable = [
        'name', 'email', 'password', 'profile_image',
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
    
    //追加分
    protected $guarded = ['id'];
    
    public static $rules = [
        'name' => 'required | max:20',
        'email' => 'required',
        'password' => 'required',
        'profile_image' => 'file | mimes:jpg,png,jpeg',
        ];
        
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    
    public function view()
    {
        return $this->hasMany('App\View');
    }
}
