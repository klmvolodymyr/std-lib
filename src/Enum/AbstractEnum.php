<?php

namespace VolodymyrKlymniuk\StdLib\Enum;

abstract class AbstractEnum
{
    /**
     * @var mixed
     */
    protected $value;
    protected bool $strict = true;

    /**
     * @param mixed $value
     *
     * @throws \UnexpectedValueException if incompatible type is given.
     */
    public function __construct($value)
    {
        if (!$this->isValid($value)) {
            throw new \UnexpectedValueException("Value '{$value}' is not part of the enum " . get_called_class());
        }
        $this->value = $value;
    }

    /**
     * @return array
     */
    abstract protected static function getAllowedValues();

    protected function isValid($value): bool
    {
        return in_array($value, $this->getAllowedValues(), $this->strict);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function is($value): bool
    {
        return $value === $this->value;
    }

    public static function getDescription(): string
    {
        $descriptions = [];
        foreach (static::getDescriptions() as $key => $value) {
            $descriptions[] = $key . ': ' . $value;
        }

        return 'Allowed values: ' . implode(', ', $descriptions);
    }

    public static function getDescriptions(): array
    {
        return [];
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}