<?php

namespace VolodymyrKlymniuk\StdLib\Range;

use VolodymyrKlymniuk\StdLib\Object\EmptyInterface;

class IntRange implements RangeInterface, EmptyInterface
{
    /**
     * @var int|null
     */
    protected $from;

    /**
     * @var int|null
     */
    protected $to;


    public function getFrom(): ?int
    {
        return $this->from;
    }


    public function setFrom(?int $from): IntRange
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?int
    {
        return $this->to;
    }


    public function setTo(?int $to): IntRange
    {
        $this->to = $to;

        return $this;
    }

    public function isEmpty(): bool
    {
        return null === $this->from && null === $this->to;
    }
}