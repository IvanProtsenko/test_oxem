<?php

namespace App;

use App\Interfaces\AnimalInterface;
use App\Interfaces\ProductionInterface;
use Exception;

class Chicken extends BaseAnimal implements AnimalInterface
{
    private $productionClass;

    public function __construct($productionClass)
    {
        if (!((new $productionClass) instanceof ProductionInterface)){
            throw new Exception('$productionClass must implements ProductionInterface');
        }

        $this->productionClass = $productionClass;

        parent::__construct();
    }

    public function getProduction()
    {
        $production = new $this->productionClass();
        $production->setCount(rand(0, 1));

        return $production;
    }
}