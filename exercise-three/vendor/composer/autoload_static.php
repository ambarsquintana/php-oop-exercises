<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9da0312ae7e8ce9480dae2db26b08052
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Styde\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Styde\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9da0312ae7e8ce9480dae2db26b08052::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9da0312ae7e8ce9480dae2db26b08052::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}