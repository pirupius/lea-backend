<?php

namespace App\Models;

use App\Models\Group;
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

    public function groups()
    {
        return $this->belongsToMany(Group::class)
                    ->withTimestamps()
                    ->withPivot('representative_title');
    }
}
