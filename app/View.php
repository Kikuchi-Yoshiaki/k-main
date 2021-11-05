<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        //'user_id' => 'required',
        // 'view_image' => 'required',
        'view_image' => 'required|file|mimes:jpg,png,jpeg|max:10000',
        'title' => 'required | max:20',
        ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
