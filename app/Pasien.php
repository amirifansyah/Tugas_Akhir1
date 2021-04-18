<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $guarded = [];

    public function kamar(){
        return $this->belongsTo(Kamar::class, 'kamar_id', 'id');
    }
}
