<?php

namespace App\Models;

use function auth;

class StoredEvent extends \Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent
{
    public static function boot()
    {
        parent::boot();

        static::creating(function(StoredEvent $storedEvent) {
            $storedEvent->meta_data['created_by'] = auth()->user()?->id;
        });
    }
}
