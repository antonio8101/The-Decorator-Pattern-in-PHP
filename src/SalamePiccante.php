<?php

namespace Antonio8101\DecoratorPatternPhp;

use Antonio8101\DecoratorPatternPhp\Contracts\BasePizzaDecorator;

class SalamePiccante extends BasePizzaDecorator
{

    /** @inheritDoc */
    public function GetCost(): float
    {
        return parent::GetCost() + 0.5;
    }

    /** @inheritDoc */
    public function GetDescription(): string
    {
        return parent::GetDescription() . ' with salame piccante';
    }
}
