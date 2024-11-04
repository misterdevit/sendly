<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasUuids;

    public function audiences()
    {
        return $this->belongsToMany(Audience::class);
    }
}
