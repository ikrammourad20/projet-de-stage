<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'age',
        'level',
        'cin',
        'phone',
        'address',
        'school',
        'sector',
        'supervisor',
        'startDate',
        'endDate',
        'image',
        'cv',
        'cinFile',
        'demande',

    ];
}
