<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    public function member(){
    	return $this->hasMany('App\Member');
    }
}
