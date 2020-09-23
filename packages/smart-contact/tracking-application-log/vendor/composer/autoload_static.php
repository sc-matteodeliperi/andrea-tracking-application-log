<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb25709d9f3fc3ba58de41224f74bb55e
{
    public static $files = array (
        '84b0cceedf595a3d561138494325ccf7' => __DIR__ . '/../..' . '/src/app/ApplicationLogHelpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TrackingApplicationLog\\' => 23,
        ),
        'J' => 
        array (
            'Jenssegers\\Agent\\' => 17,
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TrackingApplicationLog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Jenssegers\\Agent\\' => 
        array (
            0 => __DIR__ . '/..' . '/jenssegers/agent/src',
        ),
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb25709d9f3fc3ba58de41224f74bb55e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb25709d9f3fc3ba58de41224f74bb55e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb25709d9f3fc3ba58de41224f74bb55e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb25709d9f3fc3ba58de41224f74bb55e::$classMap;

        }, null, ClassLoader::class);
    }
}