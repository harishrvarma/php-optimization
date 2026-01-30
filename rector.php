<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    // uncomment to reach your current PHP version
    // ->withPhpSets()
    ->withPhpVersion(80212)
    ->withPhpSets(php82: true)
    ->withPreparedSets(
        deadCode: true,
        codingStyle: true,
        codeQuality: true,
        typeDeclarations: true,
        naming: true,
        //privatization: true,
        earlyReturn: true,
        instanceOf: true,
        symfonyCodeQuality: true,
        doctrineCodeQuality: true,
    );

