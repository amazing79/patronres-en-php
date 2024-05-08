<?php

namespace Php\Patrones\patron_observer\WithInterface\Displays;

use Php\Patrones\patron_observer\WithInterface\Data\WeatherData;
use Php\Patrones\patron_observer\WithInterface\Display;

class HeatIndexDisplay implements Observer, Display
{
    private WeatherData $observable;
    private $temperature;
    private $humidity;

    /**
     * @param WeatherData $observable
     */
    public function __construct(WeatherData $observable)
    {
        $this->observable = $observable;
        $this->observable->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {

        $this->temperature = $temperature;
        $this->humidity = $humidity;
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