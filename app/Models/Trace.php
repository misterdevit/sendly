<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Trace extends Model
{
    use HasUuids;

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }

    public function opens()
    {
        return $this->hasMany(Open::class);
    }
}
