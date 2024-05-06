<?php

namespace Php\Patrones\patron_observer\Displays;

use Php\Patrones\patron_observer\DataProviders\Observable;
use Php\Patrones\patron_observer\DataProviders\WeatherData;
use Php\Patrones\patron_observer\Display;
use Php\Patrones\patron_observer\Observer;

class CurrentsConditionDisplay implements Observer, Display
{
    private $temperature = 0;
    private $humidity = 0;
    private Observable $observable;

    /**
     * @param Observable $observable
     */
    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $this->observable->registerObserver($this);
    }

    public function display()
    {
        echo "<p>Current conditions: {$this->temperature}C degrees and {$this->humidity}% humidity</p>";
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
}