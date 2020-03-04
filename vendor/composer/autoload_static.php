<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ef4b4b921c1240aff6f2b94b91cbde3
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'B' => 
        array (
            'ByJG\\Util\\' => 10,
            'ByJG\\Session\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'ByJG\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/byjg/jwt-wrapper/src',
        ),
        'ByJG\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/byjg/jwt-session/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ef4b4b921c1240aff6f2b94b91cbde3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ef4b4b921c1240aff6f2b94b91cbde3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}