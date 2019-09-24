<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = 'komentar';

    public function blog(){
        return $this->belongsTo('App\Blog', 'komenid');
    }
}
