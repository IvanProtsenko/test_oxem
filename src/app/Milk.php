<?php

namespace App;

use App\Interfaces\ProductionInterface;

class Milk implements ProductionInterface
{
    /**
     * @param int Количество продукции
     */
    private $count = 0;

    public function getProductionName()
    {
        return 'milk';
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }
}