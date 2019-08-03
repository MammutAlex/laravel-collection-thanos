<?php

namespace MammutAlex\CollectionThanos\Test\Macros;

use Illuminate\Support\Collection;
use MammutAlex\CollectionThanos\Test\TestCase;

class AfterTest extends TestCase
{
    public function testIfThanosKillRandomValuesInCollection()
    {
        $data = new Collection([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $this->assertTrue($data->thanos()->count() < 9);
    }
}
