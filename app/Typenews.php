<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typenews extends Model
{
    protected $table = 'typenews';
    protected $fillable = [
        'type',
    ];
}
