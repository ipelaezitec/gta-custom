<?php

namespace gta;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answer(){

        return $this->hasMany(Answer::class);
    }
}
