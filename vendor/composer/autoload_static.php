<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3257d9e19d975dadddd3f33362ecde9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alfianizzah\\Tutorial\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alfianizzah\\Tutorial\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3257d9e19d975dadddd3f33362ecde9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3257d9e19d975dadddd3f33362ecde9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3257d9e19d975dadddd3f33362ecde9::$classMap;

        }, null, ClassLoader::class);
    }
}
