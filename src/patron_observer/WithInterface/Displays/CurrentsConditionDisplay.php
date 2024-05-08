<?php

namespace Php\Patrones\patron_observer\WithInterface\Displays;

use Php\Patrones\patron_observer\WithInterface\Displays\Observer;
use Php\Patrones\patron_observer\WithInterface\Display;
use Php\Patrones\patron_observer\WithInterface\Data\WeatherData;

class CurrentsConditionDisplay implements Observer, Display
{
    private $temperature = 0;
    private $humidity = 0;
    private WeatherData $observable;

    /**
     * @param WeatherData $observable
     */
    public function __construct(WeatherData $observable)
    {
        $this->observable = $observable;
        $this->observable->registerObserver($this);
    }

    public function display()
    {
        echo "<p>Current conditions: {$this->temperature}C degrees and {$this->humidity}% humidity</p>";
    }

    public function update($temperature, $humidity, $pressure)
    {

        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }
}