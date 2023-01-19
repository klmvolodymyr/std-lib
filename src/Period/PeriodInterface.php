<?php

namespace VolodymyrKlymniuk\StdLib\Period;

use VolodymyrKlymniuk\StdLib\Range\RangeInterface;

interface PeriodInterface extends RangeInterface
{
    /**
     * @return \DateTime|null
     */
    public function getFrom(): ?\DateTime;

    /**
     * @param \DateTime|null $from
     *
     * @return self
     */
    public function setFrom(?\DateTime $from);

    /**
     * @return \DateTime|null
     */
    public function getTo(): ?\DateTime;

    /**
     * @param \DateTime|null $dateEnd
     *
     * @return self
     */
    public function setTo(?\DateTime $dateEnd);
}