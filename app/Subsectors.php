<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsectors extends Model
{
    /**
     * Get the sector that owns the sub sector.
     */

    public function sectors()
    {
        return $this->belongsTo('App\Sectors');
    }
}
