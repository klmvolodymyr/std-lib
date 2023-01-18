<?php

namespace VolodymyrKlymniuk\StdLib\Consequence;

use VolodymyrKlymniuk\StdLib\Collection\AbstractGenericCollection;

class ConsequenceCollection extends AbstractGenericCollection
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return ConsequenceInterface::class;
    }
}