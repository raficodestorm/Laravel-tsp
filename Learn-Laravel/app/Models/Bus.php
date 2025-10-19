<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['company_id', 'bus_number'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'bus_id', 'id');
    }
}
