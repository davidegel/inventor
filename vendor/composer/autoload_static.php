<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0384e92c49b710706a1755723f95267b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dragon\\Model\\' => 13,
            'Dragon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dragon\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model',
        ),
        'Dragon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0384e92c49b710706a1755723f95267b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0384e92c49b710706a1755723f95267b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
