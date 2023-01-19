<?php

namespace VolodymyrKlymniuk\StdLib\FrequentField\Traits;

use VolodymyrKlymniuk\StdLib\FrequentField\Interfaces\EnabledInterface;

trait EnabledTrait
{
    /**
     * @var bool
     */
    protected $enabled = false;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnabled(bool $enabled = EnabledInterface::ENABLED)
    {
        $this->enabled = $enabled;

        return $this;
    }
}