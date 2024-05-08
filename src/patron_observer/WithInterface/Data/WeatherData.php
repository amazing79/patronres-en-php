<?php

namespace Php\Patrones\patron_observer\WithInterface\Data;

use Php\Patrones\patron_observer\WithInterface\Displays\Observer;
use Php\Patrones\patron_observer\WithInterface\Subject;

class WeatherData implements Subject
{

    private $temperature = 0;
    private $humidity = 0;
    private $pressure = 0;
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }
}