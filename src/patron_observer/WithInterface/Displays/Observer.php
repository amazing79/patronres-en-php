<?php

namespace Php\Patrones\patron_observer\WithInterface\Displays;

interface Observer
{
    public function update($temperature, $humidity, $pressure);
}