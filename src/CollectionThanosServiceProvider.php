<?php

namespace MammutAlex\CollectionThanos;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionThanosServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::macro('thanos', function () {
            return $this->filter(function ($value) {
                return (bool) random_int(0, 1);
            });
        });
    }
}
