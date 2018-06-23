<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'phone', 'pesticides', 'district', 'village', 'subcounty', 'country'
    ];
}
