<?php

namespace Antonio8101\DecoratorPatternPhp\Contracts;

/**
 * Describes how a Pizza should work
 */
interface PizzaContract
{
    /**
     * Gets the description of the Pizza
     * @return string
     */
    public function GetDescription(): string;

    /**
     * Gets the cost of the Pizza
     * @return float
     */
    public function GetCost(): float;
}
