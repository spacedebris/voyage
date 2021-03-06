<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Trip extends Model
{


    public $fillable = ['title','description'];

    public function users(){
    	return $this->belongsToMany('App\Trip');
    }
}