<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb34ab5c6ee5232f7204ecb610c2dd3b3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb34ab5c6ee5232f7204ecb610c2dd3b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb34ab5c6ee5232f7204ecb610c2dd3b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb34ab5c6ee5232f7204ecb610c2dd3b3::$classMap;

        }, null, ClassLoader::class);
    }
}
