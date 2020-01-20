<?php

namespace Styde;


use Iterator;

class LunchBox implements Iterator
{
    protected $food = [];
    protected $original = true;


    public function __construct(array $food = [])
    {
        $this->food = $food;
    }


    public function all()
    {
        return $this->food;
    }


    public function shift()
    {
        return array_shift($this->food);
    }


    public function isEmpty()
    {
        return empty($this->food);
    }


    public function __clone()
    {
        $this->original = false;
    }


//////////////////
    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->food[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->food[$this->position]);
    }
//////////////////
}