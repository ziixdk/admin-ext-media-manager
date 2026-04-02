<?php

namespace ZiiX\Admin\Media;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ziix-admin-ext-media');

        MediaManager::boot();
    }
}
