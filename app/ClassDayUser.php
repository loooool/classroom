<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassDayUser extends Model
{
    //
    protected $fillable = ['day_id', 'user_id'];

    public function day() {
        return $this->hasOne('App\ClassDay', 'id', 'user_id');
    }
}
