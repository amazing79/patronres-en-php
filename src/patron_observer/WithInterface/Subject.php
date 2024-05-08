<?php

namespace Php\Patrones\patron_observer\WithInterface;

use Php\Patrones\patron_observer\WithInterface\Displays\Observer;


interface Subject
{
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}