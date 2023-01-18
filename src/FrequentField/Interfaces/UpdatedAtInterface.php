<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface UpdatedAtInterface
{
    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt():? \DateTime;
}