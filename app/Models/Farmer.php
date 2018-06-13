<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'email',
        'district',
        'location',
    ];
}
