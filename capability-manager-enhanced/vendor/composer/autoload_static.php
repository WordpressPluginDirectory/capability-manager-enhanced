<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit946b3dc3c8d9cfcccf83fb64811dc43b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit946b3dc3c8d9cfcccf83fb64811dc43b::$classMap;

        }, null, ClassLoader::class);
    }
}
