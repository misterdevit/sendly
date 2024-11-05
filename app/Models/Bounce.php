<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Bounce extends Model
{
    use hasUuids;

    public function trace()
    {
        return $this->belongsTo(Trace::class);
    }
}
