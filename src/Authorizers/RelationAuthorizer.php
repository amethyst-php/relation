<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class RelationAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'relation.create',
        Tokens::PERMISSION_UPDATE => 'relation.update',
        Tokens::PERMISSION_SHOW   => 'relation.show',
        Tokens::PERMISSION_REMOVE => 'relation.remove',
    ];
}
