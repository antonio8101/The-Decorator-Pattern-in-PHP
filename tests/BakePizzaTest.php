<?php

use Antonio8101\DecoratorPatternPhp\Mozzarella;
use Antonio8101\DecoratorPatternPhp\Pizza;
use Antonio8101\DecoratorPatternPhp\PizzaIntegrale;
use Antonio8101\DecoratorPatternPhp\Pomodoro;
use Antonio8101\DecoratorPatternPhp\SalamePiccante;
use PHPUnit\Framework\TestCase;

class BakePizzaTest extends TestCase
{

    public function test_bakeAMargherita()
    {
        $pizza = new Pizza();
        $pizza = new Pomodoro($pizza);
        $pizza = new Pomodoro($pizza);
        $pizza = new Mozzarella($pizza);

        $this->assertEquals("Base Pizza with all-purpose flour with pomodoro with pomodoro with mozzarella", $pizza->GetDescription());
        $this->assertEquals(5.50, $pizza->GetCost());
    }

    public function test_bakeAMargherita_integerale()
    {
        $pizza = new PizzaIntegrale();
        $pizza = new Pomodoro($pizza);
        $pizza = new Pomodoro($pizza);
        $pizza = new Mozzarella($pizza);

        $this->assertEquals("Base Pizza with whole wheat flour with pomodoro with pomodoro with mozzarella", $pizza->GetDescription());
        $this->assertEquals(6.00, $pizza->GetCost());
    }

    public function test_bakeADiavola()
    {
        $pizza = new Pizza();
        $pizza = new Pomodoro($pizza);
        $pizza = new Mozzarella($pizza);
        $pizza = new SalamePiccante($pizza);

        $this->assertEquals("Base Pizza with all-purpose flour with pomodoro with mozzarella with salame piccante", $pizza->GetDescription());
        $this->assertEquals(5.50, $pizza->GetCost());
    }
}
