<?php

namespace VolodymyrKlymniuk\StdLib\Collection;

class GenericCollection extends AbstractGenericCollection
{
    private $type;

    public function __construct(string $type, array $values = [])
    {
        $this->type = $type;
        parent::__construct($values);
    }

    public function getType(): string
    {
        return $this->type;
    }
}