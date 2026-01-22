<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ChangeInventoryNbrActionDto extends Model
{
    #[Property]
    public ?string $inventoryNbr;
}
