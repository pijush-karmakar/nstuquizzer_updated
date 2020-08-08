<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function topics(){
    	return $this->belongsToMany('App\Topic')->withTimestamps();
    }
}
