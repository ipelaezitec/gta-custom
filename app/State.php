<?php

namespace gta;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function applications(){
        return $this->belongsTo(Application::class);
    }
    //
}
