<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacae7ab7900f6b4deb19c9e71423dfe5
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

        spl_autoload_register(array('ComposerAutoloaderInitacae7ab7900f6b4deb19c9e71423dfe5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacae7ab7900f6b4deb19c9e71423dfe5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitacae7ab7900f6b4deb19c9e71423dfe5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
