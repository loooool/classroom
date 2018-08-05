<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanUser extends Model
{
    //
    protected $fillable = [
        'plan_id',
        'user_id'
    ];
}
