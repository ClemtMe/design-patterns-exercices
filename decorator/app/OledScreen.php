<?php

namespace App;

class OledScreen extends ComputerDecorator
{

    public function getPrice(): int
    {
        return 350 + $this->computer->getPrice();
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with an OLED Screen";
    }
}