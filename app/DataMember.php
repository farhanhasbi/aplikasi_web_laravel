<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMember extends Model
{
    protected $table = 'data_member';

    
    public function datamember(){
    	return $this->belongsTo('App\DataMember');
    }

    
    
}
