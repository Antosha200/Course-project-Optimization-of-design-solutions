<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ff4296cb55301be44763c729a68ea12
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app/Model',
        1 => __DIR__ . '/../..' . '/app/Controller',
        2 => __DIR__ . '/../..' . '/app/Templates',
        3 => __DIR__ . '/../..' . '/app/Helpers',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit6ff4296cb55301be44763c729a68ea12::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit6ff4296cb55301be44763c729a68ea12::$classMap;

        }, null, ClassLoader::class);
    }
}