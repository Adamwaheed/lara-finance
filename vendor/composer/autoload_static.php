<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11102280829b2c41ed442d0eb5df4e87
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Atolon\\Finance\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Atolon\\Finance\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11102280829b2c41ed442d0eb5df4e87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11102280829b2c41ed442d0eb5df4e87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
