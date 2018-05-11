<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit393a8a5712ded8467741684a59e5ce6a
{
    public static $classMap = array (
        'marks\\Marks' => __DIR__ . '/../..' . '/src/marks.php',
        'modules\\Modules' => __DIR__ . '/../..' . '/src/modules.php',
        'student\\Students' => __DIR__ . '/../..' . '/src/student.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit393a8a5712ded8467741684a59e5ce6a::$classMap;

        }, null, ClassLoader::class);
    }
}