<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class RelationFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('key', $faker->text);
        $bag->set('source_type', 'foo');
        $bag->set('source', FooFaker::make()->parameters()->toArray());

        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
