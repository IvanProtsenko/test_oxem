<?php

namespace App;

class Farm {

    private $animals = [];
    private $production = [];
    
    public function spawnAnimals() 
    {
        for($i = 0; $i < 20; $i++) {
            $this->animals[] = new Chicken(Egg::class);
        }
        for($i = 0; $i < 10; $i++) {
            $this->animals[] = new Cow(Milk::class);
        }
    }

    public function peekProduction() 
    {
        foreach($this->animals as $animal)
        {
            $production = $animal->getProduction();

            if (!array_key_exists($production->getProductionName(), $this->production)) {
                $this->production[$production->getProductionName()] = 0;
            }

            $this->production[$production->getProductionName()] += $production->getCount();
        }

        echo "Всего:\n";
        foreach($this->production as $prodName => $prodCount) {
            echo "$prodCount of $prodName\n";
        }
    }

}
