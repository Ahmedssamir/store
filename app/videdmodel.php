<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videdmodel extends Model
{
    protected $table="videodata";
    protected $fillable=['name','viewer'];
    protected $timestamps = false;}