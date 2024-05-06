<?php

namespace Php\Patrones\patron_observer;

use Php\Patrones\patron_observer\DataProviders\Observable;

interface Observer
{
    public function update(Observable $observable);
}