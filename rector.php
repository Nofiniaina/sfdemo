<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
  ->withPaths([
    __DIR__ . '/src',
    __DIR__ . '/tests',
  ])
  ->withSkip([
    __DIR__ . '/src/Kernel.php',
    __DIR__ . '/var',
    __DIR__ . '/vendor',

  ])
  // uncomment to reach your current PHP version
  ->withPhpSets(php84: true)
  ->withTypeCoverageLevel(0)
  ->withDeadCodeLevel(0)
  ->withCodeQualityLevel(0);
