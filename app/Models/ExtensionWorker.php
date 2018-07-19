<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtensionWorker extends Model
{
    protected $fillable = [
        'name', 'phone', 'specialities', 'district', 'village', 'subcounty', 'country'
    ];
}
