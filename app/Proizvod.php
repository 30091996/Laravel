<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    protected $table = "proizvod";
    public $timestamps = false;

    public function porudzbine()
    {
        return $this->hasMany('App\Porudzbine');
    }
}
