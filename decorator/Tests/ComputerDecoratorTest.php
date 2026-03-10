<?php

namespace Tests;

use App\NvdiaGpu;
use App\OledScreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new NvdiaGpu(new Laptop());
        $this->assertSame(1200, $laptop->getPrice());
        $this->assertSame("A laptop computer with a Nvidia GPU", $laptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new OledScreen(new Laptop());
        $this->assertSame(750, $laptop->getPrice());
        $this->assertSame("A laptop computer with an OLED Screen", $laptop->getDescription());
    }
}