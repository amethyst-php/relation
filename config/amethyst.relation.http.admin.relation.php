<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\RelationsController::class,
    'router'     => [
        'as'     => 'relation.',
        'prefix' => '/relations',
    ],
];
