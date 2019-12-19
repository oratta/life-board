<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function habitDuration()
    {
        return $this->hasMany(('App\Habit'));
    }
}
