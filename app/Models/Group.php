<?php

namespace App\Models;

use App\Models\Farmer;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable = [
        'name',
        'district',
        'village',
        'subcounty',
        'country'
    ];

    /**
     * The Farmers that belong to the group.
     */
    public function members() {
        return $this->belongsToMany(Farmer::class)
                    ->withTimestamps()
                    ->withPivot('representative_title');
    }
}
