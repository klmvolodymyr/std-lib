<?php

namespace VolodymyrKlymniuk\StdLib\Time;

class Time
{
    /**
     * @var int|null
     */
    private $time;

    public function __construct(int $time = null)
    {
        $this->setTime($time);
    }

    public function getTime():? int
    {
        return $this->time;
    }

    public function setTime(int $time = null)
    {
        if (null !== $time) {
            $this->validate($time);
        }
        $this->time = $time;

        return $this;
    }

    public function getHours(): int
    {
        return (int) $this->time / 3600;
    }

    public function getMinutes(): int
    {
        return ((int) $this->time / 60) % 60;
    }

    public function getSeconds(): int
    {
        return $this->time % 60;
    }

    public static function dateTimeToTime(\DateTime $dateTime): Time
    {
        return self::strToTime($dateTime->format('H:i:s'));
    }

    public static function createNow(): Time
    {
        return self::dateTimeToTime(new \DateTime());
    }

    public static function strToTime(string $str): Time
    {
        $second = 0;
        preg_match('/^(\d+):(\d+)(:(\d+))?$/', $str, $match);

        if (count($match) < 2) {
            throw new \RangeException(sprintf(__CLASS__ . ': impossible parse "%s"', $str));
        }
        $hours = (int) $match[1];
        $minutes = (int) $match[2];

        if ($hours < 0 || $hours >= 24) {
            throw new \RangeException(sprintf(__CLASS__ . ': impossible value "%s" for hours', $hours));
        }

        if ($minutes < 0 || $minutes >= 60) {
            throw new \RangeException(sprintf(__CLASS__ . ': impossible value "%s" for minutes', $minutes));
        }

        $second += 3600 * $hours + 60 * $minutes;

        if (array_key_exists(4, $match)) {
            $seconds = $match[4];

            if ($seconds < 0 || $seconds >= 60) {
                throw new \RangeException(sprintf(__CLASS__ . ': impossible value "%s" for seconds', $seconds));
            }
            $second += $seconds;
        }

        return new Time($second);
    }

    public function __toString(): string
    {
        return sprintf(
            "%'.02d:%'.02d:%'.02d",
            $this->getHours(),
            $this->getMinutes(),
            $this->getSeconds()
        );
    }

//    final private function validate(int $second): void
    private function validate(int $second): void
    {
        if ($second < 0 || $second >= 86400) {
            throw new \RangeException(sprintf(__CLASS__ . ': incorrect value "%s"', $second));
        }
    }
}