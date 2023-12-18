<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit089c1c530e9d969f9227684ec17e387f
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

        spl_autoload_register(array('ComposerAutoloaderInit089c1c530e9d969f9227684ec17e387f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit089c1c530e9d969f9227684ec17e387f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit089c1c530e9d969f9227684ec17e387f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}