<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agroexpert extends Model
{
    protected $fillable = [
        'name', 'phone', 'specialities', 'district', 'village', 'subcounty', 'country'
    ];
}
