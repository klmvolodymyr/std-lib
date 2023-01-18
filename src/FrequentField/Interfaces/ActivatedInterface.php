<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface ActivatedInterface
{
    const DEACTIVATED = false;
    const ACTIVATED = true;

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(bool $active);
}