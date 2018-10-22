<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function firms() {
        return $this->belongsToMany('App\Firm');
    }
}
