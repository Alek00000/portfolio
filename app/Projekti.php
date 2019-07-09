<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projekti extends Model
{
    protected $fillable = [
        'name', 'size', 'text',
    ];
}
