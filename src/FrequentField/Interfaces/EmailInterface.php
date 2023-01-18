<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface EmailInterface
{
    /**
     * @return null|string
     */
    public function getEmail():? string;
}