<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ClassDay extends Model
{
    //
    public function plan() {
        return $this->hasOne('App\Plan', 'id', 'class_id');
    }

    public function watched() {
        return ClassDayUser::all()->where('day_id', $this->id)->where('user_id', Auth::user()->id)->count();
    }

    public function check() {
        return ClassDayUser::all()->where('day_id', $this->id)->where('user_id', Auth::user()->id)->first();
    }
}
