<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface ActiveInterface
{
    /**
     * @return bool
     */
    public function isActive(): bool;
}