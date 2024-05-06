<?php

namespace Php\Patrones\patron_observer\Displays;

use Php\Patrones\patron_observer\DataProviders\Observable;
use Php\Patrones\patron_observer\DataProviders\WeatherData;
use Php\Patrones\patron_observer\Display;
use Php\Patrones\patron_observer\Observer;
use Php\Patrones\patron_observer\Subject;

class StaticsDisplay implements Observer, Display
{
    private $pressure = 0;
    private $temperature = 0;
    private Observable $observable;

    /**
     * @param Subject $weatherData
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
        $this->pressure = $observable->getPressure();
        $this->display();
    }

    public function display()
    {
        $pressureDescription = $this->pressure > 15 ? "Maybe can Rain" : "Don't need your umbrella!";
        echo "<p>{$this->temperature}C degrees and {$pressureDescription}</p>";
    }
}