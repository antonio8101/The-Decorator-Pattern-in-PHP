<?php

namespace Antonio8101\DecoratorPatternPhp\Contracts;

abstract class BasePizzaDecorator implements PizzaContract
{
    private PizzaContract $pizza;

    public function __construct(PizzaContract $pizza)
    {
        $this->pizza = $pizza;
    }

    /** @inheritDoc */
    public function GetDescription(): string
    {
        return $this->pizza->GetDescription();
    }

    /** @inheritDoc */
    public function GetCost(): float
    {
        return $this->pizza->GetCost();
    }
}
