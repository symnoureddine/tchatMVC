<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5264706124d991f177a91cc5f1c7c24
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Repository\\' => 15,
            'App\\Models\\' => 11,
            'App\\Handlers\\' => 13,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Repository',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'App\\Handlers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Handlers',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Route.php',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\IndexController' => __DIR__ . '/../..' . '/src/Controllers/IndexController.php',
        'App\\Controllers\\MessageController' => __DIR__ . '/../..' . '/src/Controllers/MessageController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/src/Controllers/UserController.php',
        'App\\Handlers\\UserHandler' => __DIR__ . '/../..' . '/src/Handlers/UserHandler.php',
        'App\\Models\\Message' => __DIR__ . '/../..' . '/src/Models/Message.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'App\\Repository\\AppRepository' => __DIR__ . '/../..' . '/src/Repository/AppRepository.php',
        'Route' => __DIR__ . '/../..' . '/app/Route.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5264706124d991f177a91cc5f1c7c24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5264706124d991f177a91cc5f1c7c24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5264706124d991f177a91cc5f1c7c24::$classMap;

        }, null, ClassLoader::class);
    }
}
