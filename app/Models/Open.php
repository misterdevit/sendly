<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Open extends Model
{
    use HasUuids;

    public function traces()
    {
        return $this->belongsTo(Trace::class);
    }
}
