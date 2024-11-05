<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Unsubscription extends Model
{
    use HasUuids;

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
