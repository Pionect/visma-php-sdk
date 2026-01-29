<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BackgroundApiAcceptedDto extends Model
{
    #[Property]
    public ?string $id;

    #[Property]
    public ?string $stateLocation;
}
