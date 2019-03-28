<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   protected $fillable = ['type'];

   protected $table = 'types';

   public $timestamps = false;
}
