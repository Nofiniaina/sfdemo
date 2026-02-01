<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return ECSConfig::configure()
  ->withPaths([
    __DIR__ . '/src',
    __DIR__ . '/tests',
  ])

  ->withSkip([
    __DIR__ . 'src/Kernel.php',
    __DIR__ . '/var',
    __DIR__ . '/vendor',
  ])

  ->withSets([
    SetList::PSR_12,
    SetList::COMMON,
    SetList::CLEAN_CODE,
  ])

  // add sets - group of rules, from easiest to more complex ones
  // uncomment one, apply one, commit, PR, merge and repeat
  //->withPreparedSets(
  //      spaces: true,
  //      namespaces: true,
  //      docblocks: true,
  //      arrays: true,
  //      comments: true,
  //)
;
