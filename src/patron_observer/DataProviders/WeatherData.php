<?php

namespace Php\Patrones\patron_observer\DataProviders;

class WeatherData extends Observable
{
    private $temperature = 0;
    private $humidity = 0;
    private $pressure = 0;

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

    public function getTemperature(): int
    {
        return $this->temperature;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getPressure(): int
    {
        return $this->pressure;
    }

}