<?php

namespace MammutAlex\CollectionThanos\Test;

use ReflectionClass;
use PHPUnit\Framework\TestCase as BaseTestCase;
use MammutAlex\CollectionThanos\CollectionThanosServiceProvider;

abstract class TestCase extends BaseTestCase
{
    public function setup(): void
    {
        $this->createDummyprovider()->register();
    }

    protected function createDummyprovider(): CollectionThanosServiceProvider
    {
        $reflectionClass = new ReflectionClass(CollectionThanosServiceProvider::class);
        return $reflectionClass->newInstanceWithoutConstructor();
    }
}