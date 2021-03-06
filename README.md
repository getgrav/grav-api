# Grav API

This is the generated result of the [Sami - the API documentation generator](https://github.com/FriendsOfPHP/Sami).

Generated based on the following configuration:

```
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
```

To regenerate, follow these steps:

1. Ensure you have this repo `grav-api` cloned at the same level as `grav` itself.  
2. [Install Sami](https://github.com/FriendsOfPHP/Sami#installation) per the installation instructions.
3. run: `~/<Git clone location>/Sami/sami.php update ./api-config.php`
