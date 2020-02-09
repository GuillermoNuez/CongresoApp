<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    protected $table = 'pagos';

    protected $fillable = ["iduser","document"];
    public $timestamps = false;
}
