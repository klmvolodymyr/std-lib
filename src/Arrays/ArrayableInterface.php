<?php

declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\Arrays;

interface ArrayableInterface
{
    public function toArray(bool $withNull = true): array;
}