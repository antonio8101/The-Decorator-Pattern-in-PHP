<?php

namespace Antonio8101\DecoratorPatternPhp;

use Antonio8101\DecoratorPatternPhp\Contracts\PizzaContract;

/**
 * The PizzaContract implementation for the ones who cares be Fit even when eating a Pizza
 */
class PizzaIntegrale implements PizzaContract
{
    /** @inheritDoc */
    public function GetDescription(): string
    {
        return "Base Pizza with whole wheat flour";
    }

    /** @inheritDoc */
    public function GetCost(): float
    {
        return 4.50;
    }
}
