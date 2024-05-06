<?php

namespace Php\Patrones\patron_observer\DataProviders;


interface Observer
{
    public function update(Observable $observable);
}