<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface SortableInterface
{
    /**
     * @return int
     */
    public function getSort(): int;
}