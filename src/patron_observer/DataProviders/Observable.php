<?php

namespace Php\Patrones\patron_observer\DataProviders;

use Php\Patrones\patron_observer\Subject;

class Observable implements Subject
{
    protected array $observers;

    public function __construct()
    {
        $this->observers = [];
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
            $observer->update($this);
        }
    }
}