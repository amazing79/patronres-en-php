<?php

namespace Php\Patrones\patron_observer\WithInterface\Displays;


use Php\Patrones\patron_observer\WithInterface\Data\WeatherData;
use Php\Patrones\patron_observer\WithInterface\Display;

class StaticsDisplay implements Observer, Display
{
    private $pressure = 0;
    private $temperature = 0;
    private WeatherData $observable;

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
        $this->pressure = $pressure;
        $this->display();
    }

    public function display()
    {
        $pressureDescription = $this->pressure > 15 ? "Maybe can Rain" : "Don't need your umbrella!";
        echo "<p>{$this->temperature}C degrees and {$pressureDescription}</p>";
    }
}