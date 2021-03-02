<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    protected $table = "porudzbina";
    public $timestamps = false;

    public function proizvod()
    {
        return $this->belongsTo('App\Proizvod');
    }
}
