<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officers extends Model
{
    /**
     * Get the talukas that owns the Officers.
     */

    public function talukas()
    {
        return $this->belongsTo('App\Talukas');
    }
}
