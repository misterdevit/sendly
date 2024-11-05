<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasUuids;

    public function traces()
    {
        return $this->hasMany(Trace::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
