<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the Workshops for the event.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
