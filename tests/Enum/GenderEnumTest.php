<?php

namespace Tests\Enum;

use PHPUnit\Framework\TestCase;

class GenderEnumTest extends TestCase
{
    /**
     * @see GenderEnum
     */
    public function testPositive()
    {
        $enum = new GenderEnum(GenderEnum::MAN);
        $this->assertEquals(GenderEnum::MAN, $enum->getValue());
        $this->assertEquals((string) GenderEnum::MAN, $enum);
    }

    /**
     * @see GenderEnum
     */
    public function testNegative()
    {
        $this->expectException(\UnexpectedValueException::class);
        new GenderEnum(\DateTime::class);
    }
}
