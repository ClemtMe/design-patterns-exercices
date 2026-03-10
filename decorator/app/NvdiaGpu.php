<?php

namespace App;

class NvdiaGpu extends ComputerDecorator
{

    public function getPrice(): int
    {
        return 800 + $this->computer->getPrice();
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with a Nvidia GPU";
    }
}