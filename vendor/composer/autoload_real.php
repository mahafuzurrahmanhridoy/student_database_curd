<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit27a70fb304cc0604f9b1bb86c43d3022
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

        spl_autoload_register(array('ComposerAutoloaderInit27a70fb304cc0604f9b1bb86c43d3022', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit27a70fb304cc0604f9b1bb86c43d3022', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit27a70fb304cc0604f9b1bb86c43d3022::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
