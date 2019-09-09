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
            Attributes\UuidAttribute::make('id'),
            Attributes\TextAttribute::make('key'),
            Attributes\EnumAttribute::make('source_type', app('amethyst')->getMorphListable('relation', 'source'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('source_id')
                ->setRelationKey('source_type')
                ->setRelationName('source')
                ->setRelations(app('amethyst')->getMorphRelationable('relation', 'source'))
                ->setRequired(true),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getMorphListable('relation', 'target'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getMorphRelationable('relation', 'target'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
        ];
    }
}
