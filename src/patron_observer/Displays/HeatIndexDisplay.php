<?php

namespace Php\Patrones\patron_observer\Displays;

use Php\Patrones\patron_observer\DataProviders\Observable;
use Php\Patrones\patron_observer\DataProviders\WeatherData;
use Php\Patrones\patron_observer\Display;
use Php\Patrones\patron_observer\Observer;
use Php\Patrones\patron_observer\Subject;

class HeatIndexDisplay implements Observer, Display
{
    private Observable $observable;
    private $temperature;
    private $humidity;

    /**
     * @param Observable $observable
     */
    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $this->observable->registerObserver($this);
    }

    public function update(Observable $observable)
    {
        if(!($observable instanceof WeatherData)){
            throw new \InvalidArgumentException("La clase no es la esperada, fiera");
        }
        $this->temperature = $observable->getTemperature();
        $this->humidity = $observable->getHumidity();
        $this->display();
    }

    public function display()
    {
        $heatIndex = $this->calculateHeatIndex();
        echo "<p>Heat index is {$heatIndex}C° </p>";
    }

    private function calculateHeatIndex()
    {
        return ($this->temperature * $this->humidity) /10;
    }
}