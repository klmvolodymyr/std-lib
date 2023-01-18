<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface CreatedAtInterface
{
    /**
     * @return \DateTime|null
     */
    public function getCreatedAt():? \DateTime;
}