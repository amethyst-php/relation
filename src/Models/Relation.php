<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Relation extends Model implements EntityContract
{
    use ConfigurableModel;

    public $incrementing = false;

    protected $casts = ['id' => 'string'];

    protected $keyType = 'string';

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.relation.data.relation');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function source(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function target(): MorphTo
    {
        return $this->morphTo();
    }
}
