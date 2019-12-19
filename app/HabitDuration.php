<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitDuration extends Model
{
    public function habit()
    {
        return $this->belongsTo('App\Habit');
    }
}
