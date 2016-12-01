<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrators extends Model
{
    /**
     * Get the talukas that owns the Administrators.
     */

    public function talukas()
    {
        return $this->belongsTo('App\Talukas');
    }
}
