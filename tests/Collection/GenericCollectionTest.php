<?php

namespace Tests\Collection;

use PHPUnit\Framework\TestCase;
use VolodymyrKlymniuk\StdLib\Collection\GenericCollection;

class GenericCollectionTest extends TestCase
{
    /**
     * @see GenericCollection
     */
    public function testPositive()
    {
        $collection = new GenericCollection(\DateTime::class);
        $date = new \DateTime();
        $collection[] = $date;
        $this->assertEquals(1, $collection->count());
        $this->assertEquals($date, $collection[0]);
    }

    /**
     * @see GenericCollection
     */
    public function testNegative()
    {
        $this->expectException(\UnexpectedValueException::class);
        $collection = new GenericCollection(\DateTime::class);
        $collection[] = 1;
    }
}