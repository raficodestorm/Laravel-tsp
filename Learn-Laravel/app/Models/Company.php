<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];

    public function bus()
    {
        return $this->hasOne(Bus::class, 'company_id', 'id');
    }

    public function driver()
    {
        return $this->hasOneThrough(
            Driver::class, // Final related model
            Bus::class,    // Intermediate model
            'company_id',  // Foreign key on buses table (buses.company_id)
            'bus_id',      // Foreign key on drivers table (drivers.bus_id)
            'id',          // Local key on companies table
            'id'           // Local key on buses table
        );
}
}
