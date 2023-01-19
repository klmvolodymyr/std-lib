<?php

namespace Tests\Period\Computation;

use VolodymyrKlymniuk\StdLib\Period\PeriodFactory;
use VolodymyrKlymniuk\StdLib\Range\DateTimeRange;
use PHPUnit\Framework\TestCase;

class AbstractComputationTest extends TestCase
{
    protected function getAprilPeriod(): DateTimeRange
    {
        return PeriodFactory::create(2000, 4);
    }

    protected function getMayPeriod(): DateTimeRange
    {
        return PeriodFactory::create(2000, 5);
    }
}