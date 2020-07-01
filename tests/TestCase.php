<?php

namespace Blood72\Minify\Compilers\Test;

use Blood72\Minify\Compilers\BladeCompilerServiceProvider;
use Orchestra\Testbench\TestCase as BaseCase;

abstract class TestCase extends BaseCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [BladeCompilerServiceProvider::class];
    }
}
