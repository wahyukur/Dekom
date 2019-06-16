<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ang_plth extends Model
{
    protected $table = 'ang_plth';

    public function toCoa(){
        return $this->belongsTo('App\Coa');
    }
}
