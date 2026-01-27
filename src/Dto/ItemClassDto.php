<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ItemClassDto extends Model
{
    #[Property]
    public ?string $type;

    #[Property]
    public ?array $attributes;

    /** The description. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?string $errorInfo;
}
