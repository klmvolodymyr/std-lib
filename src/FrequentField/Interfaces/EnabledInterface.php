<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\FrequentField\Interfaces;

interface EnabledInterface
{
    const DISABLED = false;
    const ENABLED = true;

    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled);
}