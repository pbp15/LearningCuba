<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admision extends Model
{
    protected $fillable = ['nombres_apo','dni_apo','nombres_estud','dni_estud', 'telefono','email','nivel'];
}
