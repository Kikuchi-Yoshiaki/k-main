<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'body' => 'required',
        'main_image' => 'required|file|mimes:jpg,png,jpeg|max:10000',
        'category' => 'required',
        'sub_image_1' => 'file|mimes:jpg,png,jpeg|max:10000',
        'sub_image_2' => 'file|mimes:jpg,png,jpeg|max:10000',
        'sub_image_3' => 'file|mimes:jpg,png,jpeg|max:10000',
        'sub_image_4' => 'file|mimes:jpg,png,jpeg|max:10000',
        ];
        
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
