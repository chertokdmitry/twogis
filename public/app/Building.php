<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public function firms() {
        return $this->belongsToMany('App\Firm');
    }
}
