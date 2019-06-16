<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    protected $table = 'coa';
    // Relationship antar tabel coa dan ang_plth
    // 1 anggota tabel coa
    // dapat memiliki banyak anggota tabel ang_plth 
    public function manyAngPlth(){
        return $this->hasMany('App\Ang_plth');
    }
}
