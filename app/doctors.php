<?php

namespace App;
use App\scheduler;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    protected $table = 'doctors';
    protected $fillable = [
        'id', 'name','title','hospital_id'
    ];
    public $timestamps = false;

    public function scheduler(){


        return $this->belongto('App\scheduler','scheduler_id','id');
    }
    













}


