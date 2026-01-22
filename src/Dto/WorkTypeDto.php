<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WorkTypeDto extends Model
{
    #[Property]
    public ?string $rutRotType;

    #[Property]
    public ?string $description;

    #[Property]
    public ?string $xmlTag;
}
