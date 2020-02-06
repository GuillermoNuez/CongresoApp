<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congreso extends Model
{
    protected $fillable = ["id","title","description","price"];
}
