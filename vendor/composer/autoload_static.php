<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca8a20fbf11cc834308d9b79a77a5bd0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca8a20fbf11cc834308d9b79a77a5bd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca8a20fbf11cc834308d9b79a77a5bd0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
