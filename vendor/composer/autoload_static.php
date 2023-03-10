<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b35948e1a8213e0740c0f92c49ee45c
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit3b35948e1a8213e0740c0f92c49ee45c::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit3b35948e1a8213e0740c0f92c49ee45c::$classMap;

        }, null, ClassLoader::class);
    }
}
