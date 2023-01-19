<?php

namespace VolodymyrKlymniuk\StdLib\Range;

use VolodymyrKlymniuk\StdLib\Object\EmptyInterface;
use VolodymyrKlymniuk\StdLib\Period\PeriodInterface;

class DateTimeRange implements PeriodInterface, EmptyInterface
{
    /**
     * @var \DateTime|null
     */
    protected $from;

    /**
     * @var \DateTime|null
     */
    protected $to;

    public function __construct(\DateTime $from = null, \DateTime $to = null)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    public function setFrom(?\DateTime $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    public function setTo(?\DateTime $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function isEmpty(): bool
    {
        return null === $this->from && null === $this->to;
    }

    /**
     * Clone DateTimeRange with internal objects
     */
    public function __clone()
    {
        if (null !== ($from = $this->getFrom())) {
            $this->setFrom(clone $from);
        }
        if (null !== ($to = $this->getTo()) ) {
            $this->setTo(clone $to);
        }
    }
}