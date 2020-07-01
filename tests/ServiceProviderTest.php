<?php

namespace Blood72\Minify\Compilers\Test;

use Blood72\Minify\Compilers\BladeCompilerServiceProvider;
use Blood72\Minify\Compilers\BladeMinifyCompiler;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_is_impossible_to_defer_a_provider()
    {
        /** @var \Illuminate\Support\ServiceProvider $provider */
        $provider = $this->getMockBuilder(BladeCompilerServiceProvider::class)
            ->disableOriginalConstructor()
            ->setMethodsExcept(['isDeferred'])
            ->getMock();

        $actual = $provider->isDeferred();

        $this->assertFalse($actual);
    }

    /** @test */
    public function it_can_register_binding(): void
    {
        $actual = $this->app->get('blade.compiler');

        $this->assertInstanceOf(BladeMinifyCompiler::class, $actual);
    }
}
