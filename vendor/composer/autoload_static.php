<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a84cfb01c3cf607c8dc8a489495ab3e
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpstore\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpstore\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstore/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a84cfb01c3cf607c8dc8a489495ab3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a84cfb01c3cf607c8dc8a489495ab3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
