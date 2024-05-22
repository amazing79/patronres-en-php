<?php

namespace Php\Patrones\patron_singleton;

class ChocoloteBoiler
{
    private static $instance = null;
    private $empty;
    private $boiled;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance():self
    {
        if(is_null(self::$instance )) {
            self::$instance = new ChocoloteBoiler();
        }
        return self::$instance;
    }

    public function fill()
    {
        if($this->empty)
        {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain()
    {
        if(!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
        } else {
            echo "<p>Ya largamos el chocolate</p>";
        }
    }

    public function boil()
    {
        if(!$this->isEmpty() && !$this->isBoiled()){
            $this->boiled = true;
        } else {
            echo "<p>Ya hervimos el chocolate</p>";
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }
}