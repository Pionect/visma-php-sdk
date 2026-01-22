<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WithoutWithVatDto extends Model
{
    #[Property]
    public ?float $withoutVat;

    #[Property]
    public ?float $withVat;
}
