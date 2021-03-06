<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteee51528d329dce22deb3ab593480242
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteee51528d329dce22deb3ab593480242::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteee51528d329dce22deb3ab593480242::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
