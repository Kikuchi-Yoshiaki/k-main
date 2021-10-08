<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'name' => 'required',
        'title' => 'required',
        'body' => 'required',
        ];
}
