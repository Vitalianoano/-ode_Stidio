<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb64ea1a865a0d979d12aab8024008eaf
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb64ea1a865a0d979d12aab8024008eaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb64ea1a865a0d979d12aab8024008eaf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb64ea1a865a0d979d12aab8024008eaf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
