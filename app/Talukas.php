<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talukas extends Model
{
    /**
     * Get the villages for the talukas.
     */
    public function villages()
    {
        return $this->hasMany('App\Villages');
    }

    /**
     * Get the officers for the Talukas.
     */
    public function officers()
    {
        return $this->hasMany('App\Officers');
    }

    /**
     * Get the Administrator for the Talukas.
     */
    public function administrator()
    {
        return $this->hasMany('App\Administrators');
    }
}
