<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $primaryKey = 'id';
   public $incrementing = TRUE;
   public $timestamps = TRUE;
   
   protected $fillable = ['name', 'text'];
   
}
