<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villages extends Model
{
    /**
     * Get the Talukas that owns the village.
     */

    public function talukas()
    {
        return $this->belongsTo('App\Talukas');
    }
}
