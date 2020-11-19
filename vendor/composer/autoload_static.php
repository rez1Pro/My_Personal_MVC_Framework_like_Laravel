<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f3985bc32c2d0dbadbdd76b1dfc8b6d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f3985bc32c2d0dbadbdd76b1dfc8b6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f3985bc32c2d0dbadbdd76b1dfc8b6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f3985bc32c2d0dbadbdd76b1dfc8b6d::$classMap;

        }, null, ClassLoader::class);
    }
}