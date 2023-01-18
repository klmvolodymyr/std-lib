<?php
//declare(strict_types=1);

namespace VolodymyrKlymniuk\StdLib\Collection;

abstract class AbstractGenericCollection extends \ArrayIterator
{
    public function __construct(array $values = [])
    {
        foreach ($values as $value) {
            $this->append($value);
        }
    }

    abstract public function getType(): string;

    /**
     * @param mixed $value
     *
     * @return mixed
     * @throws \InvalidArgumentException
     */
    protected function checkType($value)
    {
        $type = $this->getType();

        if (!$value instanceof $type) {
            throw new \UnexpectedValueException(static::class . ' expects values of "' . $type . '" type');
        }

        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($index, $newval): void
    {
        parent::offsetSet($index, $this->checkType($newval));
    }

    /**
     * {@inheritdoc}
     */
    public function append($value): void
    {
        parent::append($this->checkType($value));
    }
}