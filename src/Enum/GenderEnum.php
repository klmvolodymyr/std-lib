<?php

namespace VolodymyrKlymniuk\StdLib\Enum;

class GenderEnum extends AbstractEnum
{
    const MAN = 0;
    const WOMAN = 1;

    /**
     * @return int[]
     */
    public static function getAllowedValues()
    {
        return [self::MAN, self::WOMAN];
    }
}