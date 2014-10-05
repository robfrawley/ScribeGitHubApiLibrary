<?php
/*
 * This file is part of the ScribeGitHubApiLibrary.
 *
 * (c) Scribe Inc. <source@scribenet.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$projectRootPath = realpath(__DIR__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($projectRootPath . DIRECTORY_SEPARATOR . 'lib')
;

return new Sami($iterator, [
    'theme'                => 'enhanced',
    'title'                => 'Scribe GitHub Library API',
    'build_dir'            => $projectRootPath.'/doc/api',
    'cache_dir'            => '/tmp/sami',
    'default_opened_level' => 2,
]);