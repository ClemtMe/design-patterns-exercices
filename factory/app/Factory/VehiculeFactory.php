<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Vehicule;

class VehiculeFactory extends Vehicule
{
    public function getTruck(): Vehicule
    {
        return new Truck($this->costPerKm, $this->fuelType);
    }

    public function getCar(): Vehicule
    {
        return new Car($this->costPerKm, $this->fuelType);
    }

    public function getBicycle(): Vehicule
    {
        return new Bicycle($this->costPerKm, $this->fuelType);
    }

    public function getVehicule(int $km, float $poids): Vehicule
    {
        if($km<20 && $poids<20){
            return $this->getBicycle();
        }

        if($poids>200){
            return $this->getTruck();
        }

        return $this->getCar();
    }
}