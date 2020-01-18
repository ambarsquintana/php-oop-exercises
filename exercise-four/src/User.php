<?php

namespace Styde;

class User extends Model
{

    //Methods
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }

}
