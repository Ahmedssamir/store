<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class UserData extends Model
{
    protected $table = 'ajaxes';
    protected $fillable = [
       'id', 'name', 'email','phone','city'
    ];
}
