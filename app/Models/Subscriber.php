<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasUuids;

    public function scopeActive(Builder $query): void
    {
        $query->whereHas('subscriptions', function ($query) {
            $query->whereColumn('created_at', '>', function ($query) {
                $query->select('created_at')
                    ->from('unsubscriptions')
                    ->whereColumn('subscriber_id', 'subscribers.id')
                    ->orderByDesc('created_at')
                    ->limit(1);
            });
        });
    }

    public function audiences()
    {
        return $this->belongsToMany(Audience::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function unbscriptions()
    {
        return $this->hasMany(Unsubscription::class);
    }
}
