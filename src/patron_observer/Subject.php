<?php

namespace Php\Patrones\patron_observer;

use Php\Patrones\patron_observer\DataProviders\Observer;


interface Subject
{
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}