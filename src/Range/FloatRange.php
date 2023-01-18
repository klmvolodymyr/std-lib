<?php

namespace VolodymyrKlymniuk\StdLib\Range;

use VolodymyrKlymniuk\StdLib\Object\EmptyInterface;

class FloatRange implements RangeInterface, EmptyInterface
{
    /**
     * @var float|null
     */
    protected $from;

    /**
     * @var float|null
     */
    protected $to;

    public function getFrom(): ?float
    {
        return $this->from;
    }

    public function setFrom(?float $from): FloatRange
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?float
    {
        return $this->to;
    }

    /**
     * @param float|null $to
     *
     * @return self
     */
    public function setTo(?float $to): FloatRange
    {
        $this->to = $to;

        return $this;
    }

    public function isEmpty(): bool
    {
        return null === $this->from && null === $this->to;
    }
}