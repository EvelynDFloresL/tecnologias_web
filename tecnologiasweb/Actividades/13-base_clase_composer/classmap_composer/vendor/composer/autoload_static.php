<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefce7557368f5e71eb3595c8fc07b743
{
    public static $classMap = array (
        'Account' => __DIR__ . '/../..' . '/app/models/Account.php',
        'AccountController' => __DIR__ . '/../..' . '/app/controllers/AccountController.php',
        'AccountTemplate' => __DIR__ . '/../..' . '/app/views/AccountTemplate.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'User' => __DIR__ . '/../..' . '/app/models/User.php',
        'UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'UserTemplate' => __DIR__ . '/../..' . '/app/views/UserTemplate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitefce7557368f5e71eb3595c8fc07b743::$classMap;

        }, null, ClassLoader::class);
    }
}
