<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf00a2000a34e0ac6cad7e866991b2a0d
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf00a2000a34e0ac6cad7e866991b2a0d::$classMap;

        }, null, ClassLoader::class);
    }
}
