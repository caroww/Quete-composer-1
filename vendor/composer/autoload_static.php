<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5eddb49906ced6ec31849a5170cb1cd7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5eddb49906ced6ec31849a5170cb1cd7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5eddb49906ced6ec31849a5170cb1cd7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
