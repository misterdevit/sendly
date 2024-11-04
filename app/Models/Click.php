<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    use HasUuids;

    public function trace()
    {
        return $this->belongsTo(Trace::class);
    }

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
