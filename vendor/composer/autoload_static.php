<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitceec2edb38bca7b60aeff21409fb4cb9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cafetaria\\Helper\\' => 17,
            'Cafetaria\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cafetaria\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/cafetariahelper/php-composer-cafetaria-helper/src',
        ),
        'Cafetaria\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitceec2edb38bca7b60aeff21409fb4cb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitceec2edb38bca7b60aeff21409fb4cb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitceec2edb38bca7b60aeff21409fb4cb9::$classMap;

        }, null, ClassLoader::class);
    }
}
