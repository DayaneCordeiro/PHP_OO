<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7857e3255afe6ba3184ce616e6e2f36a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagSeguro\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagSeguro\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagseguro/pagseguro-php-sdk/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7857e3255afe6ba3184ce616e6e2f36a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7857e3255afe6ba3184ce616e6e2f36a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7857e3255afe6ba3184ce616e6e2f36a::$classMap;

        }, null, ClassLoader::class);
    }
}
