<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration\Attributes;

use Attribute;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Pionect\VismaSdk\Foundation\Hydration\RelationType;

#[Attribute]
readonly class Relationship
{
    /**
     * @param  class-string<Model>  $model
     */
    public function __construct(public string $model, public RelationType $type) {}
}
