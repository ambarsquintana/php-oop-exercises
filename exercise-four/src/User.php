<?php

namespace Styde;

class User extends Model
{
    private $dbPassword = 'secret';

    //Methods
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }


    //Magic methods
    public function __sleep()
    {
        return ['attributes'];
    }

    public function __wakeup()
    {
        $this->attributes['name'] = strtoupper($this->attributes['name']);
    }

}
