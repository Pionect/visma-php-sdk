<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventorySummaryQueryParameters extends Model
{
    #[Property]
    public ?string $warehouse;

    #[Property]
    public ?string $location;
}
