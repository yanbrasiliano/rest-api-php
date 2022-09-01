<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f13e74fdfd1b95a739adb8becc011b2
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f13e74fdfd1b95a739adb8becc011b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f13e74fdfd1b95a739adb8becc011b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f13e74fdfd1b95a739adb8becc011b2::$classMap;

        }, null, ClassLoader::class);
    }
}