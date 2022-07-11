<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita91de1c70b3187a9290ac4b80432f102
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita91de1c70b3187a9290ac4b80432f102::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita91de1c70b3187a9290ac4b80432f102::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita91de1c70b3187a9290ac4b80432f102::$classMap;

        }, null, ClassLoader::class);
    }
}
