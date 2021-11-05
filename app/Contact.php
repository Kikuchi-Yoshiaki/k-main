<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = [
        'contact_name' => 'required | max:30',
        'email' => 'required',
        'contact_title' => 'required | max:30',
        'contact_body' => 'required | max:300',
        ];
}
