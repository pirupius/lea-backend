<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agroexpert extends Model
{
    protected $fillable = [
        'name', 'phone', 'district', 'country'
    ];
}
