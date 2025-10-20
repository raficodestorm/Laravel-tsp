<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aria extends Model
{
    public function ticket()
    {
        return $this->hasManyThrough(Ticket::class, Counter::class);
    }
}
