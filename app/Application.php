<?php

namespace gta;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded=[];

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function state(){

        return $this->hasOne(State::class);
    }
}
