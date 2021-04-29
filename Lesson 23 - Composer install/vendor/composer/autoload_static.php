<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b03f290d464680d6b95aedd729e36a8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b03f290d464680d6b95aedd729e36a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b03f290d464680d6b95aedd729e36a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b03f290d464680d6b95aedd729e36a8::$classMap;

        }, null, ClassLoader::class);
    }
}
