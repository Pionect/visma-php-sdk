<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CurrencyRateTypeDto extends Model
{
    /** Description. */
    #[Property]
    public ?string $description;

    /** Days effective. */
    #[Property]
    public ?int $daysEffective;
}
