<?php

namespace MammutAlex\CollectionThanos;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionThanosServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::macro('thanos', function ($percent = 50) {
            return $this->filter(function () use ($percent) {
                return mt_rand(1, 100) <= $percent;
            });
        });
    }
}
