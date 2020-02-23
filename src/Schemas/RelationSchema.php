<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class RelationSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make('id'),
            Attributes\TextAttribute::make('key'),
            \Amethyst\Core\Attributes\DataNameAttribute::make('source_type')
                ->setRequired(true),
            Attributes\MorphToAttribute::make('source_id')
                ->setRelationKey('source_type')
                ->setRelationName('source')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            \Amethyst\Core\Attributes\DataNameAttribute::make('target_type')
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
        ];
    }
}
