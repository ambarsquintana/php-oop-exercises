<?php

namespace Styde;

class Food extends Model
{
    protected $beverage = false;

    public function getBeverageAttribute ()
    {
        return $this->attributes['beverage'] ?? false;
    }
}
