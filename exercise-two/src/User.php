<?php

namespace Styde;

class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->setAttributes($attributes);
    }


    //Getter methods
    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getAttribute($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    //Setter methods
    public function setAttributes(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    //Methods
    public function hasAttribute($name)
    {
        return isset($this->attributes[$name]);
    }

    //Magic methods
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __set($name, $value)
    {
        return $this->setAttribute($name, $value);
    }

    public function __isset($name)
    {
        return $this->hasAttribute($name);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}
