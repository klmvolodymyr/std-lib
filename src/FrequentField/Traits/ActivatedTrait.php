<?php

namespace VolodymyrKlymniuk\StdLib\FrequentField\Traits;

use VolodymyrKlymniuk\StdLib\FrequentField\Interfaces\ActivatedInterface;

trait ActivatedTrait
{
    protected bool $active = false;

    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive(bool $active = ActivatedInterface::ACTIVATED)
    {
        $this->active = $active;

        return $this;
    }
}