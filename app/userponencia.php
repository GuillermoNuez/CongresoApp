<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userponencia extends Model
{
    protected $table = 'userponencias';
    
    // protected $hidden = ['created_at','updated_at'];

    protected $fillable = ["iduser","idponencia"];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }

    public function ponencia() {
        return $this->belongsTo('App\User', 'idponencia');
    }

}
