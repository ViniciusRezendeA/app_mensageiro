<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43261e7efc5302577b305208024cd942
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'V' => 
        array (
            'ViniciusRezende\\AppMensageiro\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'ViniciusRezende\\AppMensageiro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43261e7efc5302577b305208024cd942::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43261e7efc5302577b305208024cd942::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43261e7efc5302577b305208024cd942::$classMap;

        }, null, ClassLoader::class);
    }
}
