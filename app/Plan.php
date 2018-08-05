<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    public function days() {
        return $this->hasMany('App\ClassDay', 'class_id', 'id');
    }





}
