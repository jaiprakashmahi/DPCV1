<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectors extends Model
{
    /**
     * Get the sector for the sub sector.
     */
    public function subsectors()
    {
        return $this->hasMany('App\Subsectors');
    }


}
