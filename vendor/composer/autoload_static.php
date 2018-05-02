<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15e3b0d8eda36d0e654299e0e14c1204
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Socola\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Socola\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Socola',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15e3b0d8eda36d0e654299e0e14c1204::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15e3b0d8eda36d0e654299e0e14c1204::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
