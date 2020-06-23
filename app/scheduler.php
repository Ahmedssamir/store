<?php

namespace App;
use App\doctors;
use Illuminate\Database\Eloquent\Model;

class scheduler extends Model
{   public $timestamps = false;
    
    protected $fillable = [
        'day','time','price',
    ];
     
protected $hidden=['id','created_at','updated_at'];

public function doctors(){
    return $this->hasone('app\doctors','scheduler_id','id');

}



}
