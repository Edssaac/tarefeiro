<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8b1c7a59a13764a1a9b355223e86a10d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8b1c7a59a13764a1a9b355223e86a10d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8b1c7a59a13764a1a9b355223e86a10d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8b1c7a59a13764a1a9b355223e86a10d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
