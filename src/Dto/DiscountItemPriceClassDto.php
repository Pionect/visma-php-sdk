<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DiscountItemPriceClassDto extends Model
{
    #[Property]
    public ?string $priceClassId;
}
