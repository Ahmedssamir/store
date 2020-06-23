<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    protected $table = 'hospitals';
    protected $fillable = [
        'id', 'name','adress'
    ];
   public $timestamps = false;





}