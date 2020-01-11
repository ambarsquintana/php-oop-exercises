<?php


namespace Styde\Loggers;

use Styde\Logger;

class HtmlLogger implements Logger
{
    public static function info($message)
    {
        echo "<p>{$message}</p>";
    }
}
