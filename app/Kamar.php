<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $guarded = [];

    public function pasien(){
        return $this->hasMany(Pasien::class, 'kamar_id', 'id');
    }
}
