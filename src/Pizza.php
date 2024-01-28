<?php

namespace Antonio8101\DecoratorPatternPhp;

use Antonio8101\DecoratorPatternPhp\Contracts\PizzaContract;

/**
 * The very simple and first PizzaContract implementation
 */
class Pizza implements PizzaContract
{
    /** @inheritDoc */
    public function GetDescription(): string
    {
        return "Base Pizza with all-purpose flour";
    }

    /** @inheritDoc */
    public function GetCost(): float
    {
        return 4.0;
    }
}
