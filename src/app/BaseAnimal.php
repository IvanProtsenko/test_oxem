<?php

namespace App;

class BaseAnimal {
    
    /**
     * @param int
     */
    private static $id_seq = 1;

    /**
     * @param int
     */
    protected $id;

    public function __construct()
    {
        $this->id = self::$id_seq++;
    }

}