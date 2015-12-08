<?php

use Sami\Sami;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->exclude('tests')
    ->in($dir = __DIR__.'/../grav/system/src')
    ->in($dir = __DIR__.'/../grav/vendor/rockettheme')
;

return new Sami($iterator, array(
    'theme'                => 'default',
    'title'                => 'Grav API',
    'build_dir'            => __DIR__.'/api',
    'cache_dir'            => __DIR__.'/cache/api',
    'default_opened_level' => 2
));
