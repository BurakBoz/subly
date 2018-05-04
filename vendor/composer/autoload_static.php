<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita59172ea7b7709dd43d00fc3783439cc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Captioning' => 
            array (
                0 => __DIR__ . '/..' . '/captioning/captioning/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita59172ea7b7709dd43d00fc3783439cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita59172ea7b7709dd43d00fc3783439cc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita59172ea7b7709dd43d00fc3783439cc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
