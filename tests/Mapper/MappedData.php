<?php

namespace Tests\Mapper;

class MappedData
{
    public array $array2 = [1];
    private int $scalar1 = 2;
    private bool $scalar2 = true;

    public function getScalar1(): int
    {
        return $this->scalar1;
    }

    public function setScalar1(int $scalar1)
    {
        $this->scalar1 = $scalar1;
    }

    public function isScalar2(): bool
    {
        return $this->scalar2;
    }

    public function setScalar2(bool $scalar2)
    {
        $this->scalar2 = $scalar2;
    }
}
