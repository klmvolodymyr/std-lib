<?php

namespace VolodymyrKlymniuk\StdLib\Enum;

abstract class AbstractTransitionalEnum extends AbstractEnum
{
    abstract public function getTransitionRules(): array;
    private function getAllowedTransitions(AbstractEnum $enum = null): array
    {
        $rules = $this->getTransitionRules();

        return  null === $enum ? $rules['create'] : $rules['transitions'][$enum->getValue()];
    }

    public function canReplace(AbstractEnum $enum = null): bool
    {
        return in_array($this->getValue(), $this->getAllowedTransitions($enum));
    }

    public function canBecome(AbstractEnum $enum = null): bool
    {
        return in_array(
    null === $enum ? null : $enum->getValue(),
            $this->getAllowedTransitions($this)
        );
    }
}