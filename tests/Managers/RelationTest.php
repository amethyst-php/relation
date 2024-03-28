<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\RelationFaker;
use Amethyst\Managers\RelationManager;
use Amethyst\Tests\Base;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class RelationTest extends Base
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = RelationManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = RelationFaker::class;
}
