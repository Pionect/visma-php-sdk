<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Description &gt; A brief description of the warehouse location.
 */
class DescriptionInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
