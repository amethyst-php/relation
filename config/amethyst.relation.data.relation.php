<?php

return [
    'table'      => 'amethyst_relations',
    'comment'    => 'Relation',
    'model'      => Amethyst\Models\Relation::class,
    'schema'     => Amethyst\Schemas\RelationSchema::class,
    'repository' => Amethyst\Repositories\RelationRepository::class,
    'serializer' => Amethyst\Serializers\RelationSerializer::class,
    'validator'  => Amethyst\Validators\RelationValidator::class,
    'authorizer' => Amethyst\Authorizers\RelationAuthorizer::class,
    'faker'      => Amethyst\Fakers\RelationFaker::class,
    'manager'    => Amethyst\Managers\RelationManager::class,
];
