<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Mass-assignment থেকে নিরাপত্তা:fillable নির্ধারণ
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
