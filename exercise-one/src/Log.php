<?php

namespace Styde;

class Log 
{
    protected static $logger;

    public static function setLogger($logger)
    {
        static::$logger = $logger;
    }

    public static function info($message)
    {
        static::$logger->info($message);
    }
}
