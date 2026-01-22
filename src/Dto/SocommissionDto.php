<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SocommissionDto extends Model
{
    #[Property]
    public ?string $salesPersonId;

    #[Property]
    public ?float $commissionPercent;

    #[Property]
    public ?float $commissionAmount;

    #[Property]
    public ?float $commissionableAmount;
}
