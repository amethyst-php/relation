<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        app('amethyst')->pushMorphRelation('relation', 'source', 'foo');
        app('amethyst')->pushMorphRelation('relation', 'target', 'foo');

        $this->artisan('migrate:fresh');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\RelationServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
